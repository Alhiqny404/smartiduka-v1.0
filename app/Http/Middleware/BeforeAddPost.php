<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BeforeAddPost
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
        $company = auth()->user()->profileCompany;
        if(empty($company->name) || empty($company->bidang) || empty($company->deskripsi) || empty($company->office_phone)
        || empty($company->office_email) || empty($company->website) || empty($company->email_person) || empty($company->contact_person))
        {
            return redirect()->back()->with('warning','Lengkapi Profile Perusahaan Anda');
        }
        return $next($request);

    }
}
