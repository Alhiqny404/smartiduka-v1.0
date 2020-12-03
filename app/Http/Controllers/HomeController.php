<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PostLoker;
use App\Models\Pelamar;
use App\Models\user;
use App\Models\Kategori;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



/* --------------------------------- REDIRECT KETIKA LOGIN -------------------------------*/
    public function redirectLogin()
    {

        $post = PostLoker::where('status','success')->get();

        if(Auth::user()->hasAnyRole('super_admin') || Auth::user()->hasAnyRole('admin'))
        {
            return 'Admin';
        }
        if(Auth::user()->hasAnyRole('company'))
        {
            // return 'Company';
            // return redirect::url('dashboard/perusahaan');
        }

        return view('home',compact('post'));
    }





/* ---------------------------- HALAMAN UTAMA USERS -------------------------*/
    public function index()
    {
        $posts = PostLoker::where('status','success')->latest()->paginate(10);

        return view('home',compact('posts'));
    }

    public function dashboard()
    {
        // $pelamar = Pelamar::where('company_id',$company_id)->count();
        $loker = PostLoker::where('status','success')->count();
        $user = User::role('user')->count();
        $company = User::role('company')->count();
        $admin = User::role('admin')->count();
        return view('dashboard.index',compact('user','company','admin','loker'));
    }

    public function company()
    {
        $company_id = auth()->user()->profileCompany->id;
        $pelamar = Pelamar::where('company_id',$company_id)->count();
        $loker = PostLoker::where('user_id',auth()->user()->id)->count();
        return view('company.index',compact('pelamar','loker'));
    }



/* ---------------------- LOWONGAN KERJA ------------------ */
    public function detailLoker($slug)
    {
        $post = PostLoker::where('slug',$slug)->first();
        $pelamar = Pelamar::where('user_id',auth()->user()->id)->where('post_id',$post->id);
        return view('pages.detailloker',compact('post','pelamar'));
    }

    public function detailLoker2($slug)
    {
        $post = PostLoker::where('slug',$slug)->first();
        $pelamar = Pelamar::where('user_id',auth()->user()->id)->where('post_id',$post->id);
        return view('pages.detailloker2',compact('post','pelamar'));
    }




    public function lokerfilterkategori(Request $request)
    {
        if($request->kategori == null)
        {
            return redirect()->route('home');
        }
        $kategori = Kategori::whereId($request->kategori)->first();
        return redirect()->route('showlokerfilterkategori',$kategori->slug);
        
    }


    public function showlokerfilterkategori($slug)
    {
        $kategori = Kategori::where('slug',$slug)->first();
        $post = PostLoker::where('kategori_id',$kategori->id)->get();

        return view('pages.lokerfilterkategori',compact('post','kategori'));
    }


}






