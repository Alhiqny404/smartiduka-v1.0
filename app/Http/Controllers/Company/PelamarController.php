<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Uploads;
use App\Models\User;
use App\Models\ProfileCompany;
use App\Models\Interview;
use App\Models\PostLoker;
use App\Mail\NotifMelamar;
use App\Mail\GagalMelamar;
use App\Mail\lolosMelamar;
use DataTables;
use Carbon\Carbon;

class PelamarController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $company = ProfileCompany::where('user_id',$request->company_id)->first()->id;
        
        Pelamar::create([
            'company_id' => $company,
            'user_id' => $request->user_id,
            'post_id' => $id,
            'status' => 'pending'
        ]);

        $pelamar =  User::where('id',$request->user_id)->first()->profile;
        $perusahaan =  ProfileCompany::where('user_id',$request->company_id)->first();
        $post = PostLoker::where('id',$id)->first();

        $body = [
            'name' => $pelamar->name,
            'name_company' => $perusahaan->name,
            'title_post' => $post->title,
            'email_company' => $perusahaan->email_person,
            'contact_company' => $perusahaan->contact_person
        ];

        \Mail::to($pelamar->email)->send(new NotifMelamar($body));


        

        return redirect()->route('home')->with('success','Lamaran Anda Telah Dikirim\n Tunggu Info Selanjutnya...');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    // MENGHAPUS DATA PELAMAR ATAU PEMBATALAN MELAMAR
    public function destroy($id)
    {
        Pelamar::find($id)->delete();

        return redirect()->back()->with('success','Lamaran anda telah dibatalkan');
    }





/*------------------------------------ HALAMAN MILIK ROLE USER -------------------------------------------*/

    public function listLamaranUser()
    {
        $lamaran = Pelamar::where('user_id',auth()->user()->id)->get();
        return view('user.lamaran.index',compact('lamaran'));
        // return view('user.lamaran.index',compact('lamaran'));
    }
    public function jsonPelamarInUser(Request $request){
        $data = Pelamar::latest()->get();
        return Datatables::of($data)->make(true);
    }





    
    

    


/*------------------------------------ HALAMAN MILIK ROLE COMPANY -------------------------------------------*/

    
    // DATA PELAMAR
    public function dataPelamar()
    {
        $company_id = auth()->user()->ProfileCompany->id;
        $interview = Interview::all();
        $pelamar = Pelamar::where('company_id',$company_id)->where('status','pending')->get();
        $gagal = Pelamar::where('company_id',$company_id)->where('status','failed')->get();
        $lolos = Pelamar::where('company_id',$company_id)->where('status','success')->get();
        $interview = Interview::where('status','pending')->get();

        return view('company.pelamar.index',compact('pelamar','gagal','interview','lolos'));
    }
    // DETAIL PELAMAR
    public function detailPelamar($id)
    {
        $pelamar = Pelamar::find($id);
        $lampiran = Uploads::where('user_id',$pelamar->user_id)->first();
        return view('company.detailPelamar',compact('pelamar','lampiran'));
    }

    // KEPUTUSAN PERUSAHAAN MENERIMA ATAU TIDAK
    public function tinjauPelamar($id)
    {
        $pelamar = Pelamar::find($id)->first();
        return view('company.pelamar.tinjau',compact('pelamar'));
    }

    // AKSI DARI KEPUTUSAN PERUSAHAAN
    public function tinjauPelamarPost(Request $request, $id)
    {
        Pelamar::find($id)->update(['status' => $request->status]);



        $pelamar = Pelamar::where('id',$id)->first()->user->profile;
        $perusahaan = Pelamar::where('id',$id)->first()->company;
        $post = Pelamar::where('id',$id)->first()->post;

        $body = [
                'name' => $pelamar->name,
                'name_company' => $perusahaan->name,
                'title_post' => $post->title,
                'email_company' => $perusahaan->email_person,
                'contact_company' => $perusahaan->contact_person,
                'tempat' => $request->tempat,
                'tanggal' => $request->tanggal,
                'waktu' => $request->waktu,
                'deskripsi' => $request->deskripsi
            ];

            if($request->status == 'failed')
            {
                 \Mail::to($pelamar->email)->send(new GagalMelamar($body));
            }
            if($request->status == 'success')
            {
                 \Mail::to($pelamar->email)->send(new lolosMelamar($body));
            }
           



        return redirect()->back()->with('success','Telah Mengambil Keputusan');

    // PENJADWALAN INTERVIEW
    }public function aturInterview($id)
    {
        $pelamar = Pelamar::find($id);
        return view('company.pelamar.interview',compact('pelamar'));
    }

    // TOLAK LAMARAN
    public function tolakLamaran($id)
    {
        // Pelamar::find($id)->update(['status'=>'failed']);

           return $pelamar = Pelamar::where('id',$id)->first();
            // $perusahaan = Pelamar::where('id',$id)->first()->company;
            // $post = Pelamar::where('id',$id)->first()->post;
            

        \Mail::to($pelamar->email)->send(new NotifInterview($body));

        return redirect()->back();
    }

    // Data Pelamar Yang lolos
    public function lolos()
    {
        $company_id = auth()->user()->ProfileCompany->id;
        $pelamar = Pelamar::where('company_id',$company_id)->where('status','success')->get();

        return view('company.pelamar.lolos',compact('pelamar'));
    }

    // Data Pelamar Tidak lolos
    public function gagal()
    {
        $company_id = auth()->user()->ProfileCompany->id;
        $pelamar = Pelamar::where('company_id',$company_id)->where('status','failed')->get();
        return view('company.pelamar.gagal',compact('pelamar'));
    }



}
