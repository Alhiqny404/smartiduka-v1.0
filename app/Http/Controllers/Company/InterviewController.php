<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interview;
use App\Models\Pelamar;
use App\Models\ProfileCompany;
use App\Models\User;
use Carbon\Carbon;
use App\Mail\NotifInterview;
use App\Mail\GagalMelamar;
use App\Mail\lolosMelamar;

class InterviewController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    
    public function index()
    {

        $company = ProfileCompany::where('user_id',auth()->user()->id)->first();
        $interview = Interview::all();
        $invwPending = Interview::where('status','pending')->where('company_id',$company->id)->get();
        $invwSuccess = Interview::where('status','success')->where('company_id',$company->id)->get();
        return view('company.interview.index',compact('invwPending','invwSuccess'));
    }

    public function store(Request $request,$id)
    {
    	Interview::create([
            'user_id' => $request->user_id,
            'company_id' => auth()->user()->ProfileCompany->id,
    		'pelamar_id' => $id,
    		'tempat' => $request->tempat,
    		'tanggal' => $request->tanggal,
    		'waktu' => $request->waktu,
    		'deskripsi' => $request->deskripsi,
            'status' => 'pending'
    	]);

        Pelamar::find($id)->update(['status' => 'process']);

            $pelamar = User::where('id',$request->user_id)->first()->profile;
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

        \Mail::to($pelamar->email)->send(new NotifInterview($body));

    	return redirect()->route('pelamar.index')->with('success','Berhasil Melakukan penjadwalan');
    }

    public function doneInverview($id)
    {
        Interview::find($id)->update(['status'=>'success']);

        return redirect()->back();
    }

    public function keputusanAkhir(Request $request,$id)
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

        return redirect()->back(); 
    }

    /* -------------------------- HALAMAN UNTUK USER --------------------------------- */
    public function myinterview()
    {  
        $interview = Interview::where('user_id',auth()->user()->id)->get();
        return view('user.interview.index',compact('interview'));
    }

}
