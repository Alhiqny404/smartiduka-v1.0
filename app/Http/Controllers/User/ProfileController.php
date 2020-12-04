<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;

class ProfileController extends Controller
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
        $profile = Profile::where('user_id',$id)->first();
        return view('user.profile.index',compact('profile'));
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
        $profile = Profile::find($id);
        return view('user.profile.edit',compact('profile'));
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
        


        //  $request->validate([
        //     'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);

       if($request->hasFile('foto'))
         {
           $request->file('foto')->move('foto-profile-user/', time().$request->file('foto')->getClientOriginalName());
           Profile::where('id', $id)->update([
             'foto' => time().$request->file('foto')->getClientOriginalName()
           ]);
         }
      
        Profile::where('id', $id)->update([
            'name' => $request->name,
            'kota_lahir' => $request->kota_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'jk' => $request->jk,
            'agama' => $request->agama,
            'tg_badan' => $request->tg_badan,
            'brt_badan' => $request->brt_badan,
            'status_nikah' => $request->status_nikah,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'website' => $request->website,
            'pendidikan' => $request->pendidikan,
            'penghargaan' => $request->penghargaan,
            'pengalaman' => $request->pengalaman,
            'keahlian' => $request->keahlian,
            ]);
            
           
        return redirect()->back()->with('success','Profile Anda Berhasil Diubah');
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
