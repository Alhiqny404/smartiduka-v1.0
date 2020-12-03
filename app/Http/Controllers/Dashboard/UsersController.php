<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use DataTables;


class UsersController extends Controller
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
        $users = User::role('user')->get();
        return view('dashboard.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => ['string','max:100','unique:users'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['string','confirmed'],
        ]);


        $user = User::create([
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    ]);
                
        $user->assignRole('user');

        $user->Profile()->save(new Profile);
        $user->Uploads()->save(new Uploads);

        return redirect()->route('users.index');
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
        $user = User::find($id);

        return view('dashboard.users.edit',compact('user'));
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
        $user = User::find($id);

        if(!empty($request->username)){
            $this->validate($request,[
            'username' => ['string','max:100','unique:users'],
            ]);
            $user->update(['username' => $request->username]);
        }

        if(!empty($request->email)){
            $this->validate($request,[
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            ]);
            $user->update(['email' => $request->email]);
        }

        if(!empty($request->password)){
            $this->validate($request,[
            'password' => ['string','confirmed'],
            ]);
            $user->update(['password' => Hash::make($request->password)]);
        }
        
        return redirect()->route('users.index');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back()->with('delete','Data Berhasil Dihapus');
    }
}
