<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfileCompany;

class ProfileCompanyController extends Controller
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
        $id = auth()->user()->id;
        $company = ProfileCompany::where('user_id',$id)->first();
        return view('company.profile.index',compact('company'));
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
    public function store(Request $request)
    {
        //
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
        $company = ProfileCompany::where('user_id', $id)->first();
        return view('company.profile.edit',compact('company'));
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

        if($request->hasFile('logo'))
         {
           $request->file('logo')->move('logo-perusahaan/', time().$request->file('logo')->getClientOriginalName());
           ProfileCompany::where('id', $id)->update([
             'logo' => time().$request->file('logo')->getClientOriginalName()
           ]);
         }

        ProfileCompany::where('id', $id)->update([
            'name' => $request->name,
            'bidang' => $request->bidang,
            'deskripsi' => $request->deskripsi,
            'office_phone' => $request->office_phone,
            'office_email' => $request->office_email,
            'website' => $request->website,
            'email_person' => $request->email_person,
            'contact_person' => $request->contact_person,
            'address' => $request->address,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            ]);
            
           
        return redirect()->back()->with('success','Profile Perusahaan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
