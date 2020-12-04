<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BeforeApply
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user()->profile;
        if(empty($user->name) || empty($user->kota_lahir) || empty($user->tgl_lahir) || empty($user->jk) || empty($user->agama) || empty($user->status_nikah) || empty($user->alamat) || empty($user->no_hp) || empty($user->email) || empty($user->pendidikan))
        {
            return redirect()->back()->with('warning','Lengkapi Profile Anda Terlebih dahulu!');
        }
        $upload = auth()->user()->uploads;
        if(empty($upload->cv) || empty($upload->ktp) || empty($upload->ijazah) || empty($upload->pasfoto))
        {
          return redirect()->back()->with('warning','Upload Lampiran Anda Terlebih dahulu!');  
        }
        return $next($request);

    }
}
