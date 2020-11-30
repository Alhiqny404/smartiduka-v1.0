<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\Uploads;
use App\Models\ProfileCompany;
use DataTables;
use Carbon\Carbon;

class PelamarController extends Controller
{
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

        return redirect()->route('home');
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

        return redirect()->back();
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
        $pelamar = Pelamar::where('company_id',$company_id)->where('status','pending')->get();
        return view('company.pelamar.index',compact('pelamar'));
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

        return redirect()->back();

    // PENJADWALAN INTERVIEW
    }public function aturInterview($id)
    {
        $pelamar = Pelamar::find($id);
        return view('company.pelamar.interview',compact('pelamar'));
    }

    // TOLAK LAMARAN
    public function tolakLamaran($id)
    {
        Pelamar::find($id)->update(['status'=>'failed']);

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
