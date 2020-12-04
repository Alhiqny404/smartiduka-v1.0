<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Profile;
use App\Models\Uploads;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;

class DaftarUserController extends Controller
{
 
use RegistersUsers;

   
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

  
    protected function validator(array $data)
    {

        $message = [
            'required' => 'Kolom tidak boleh kosong!',
            'min:8' => 'Password minimal 8 karakter',
        ];

        return Validator::make($data, [
            'username' => ['required','string','max:100','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],$message);
    }

 
 
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(Request $request,$user)
    {
    	$user->assignRole('user');
	    $user->Profile()->save(new Profile);
	    $user->Uploads()->save(new Uploads);

	    return redirect()->route('home')->with('success','Pendaftaran telah berhasil \n Silahkan Periksa Email anda untuk verifikasi!');
    }















}

