<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfileCompany;

class ShowPerusahaan extends Controller
{
    public function index($id)
    {
        $company = ProfileCompany::where('id',$id)->first();
        return view('pages.showcompany',compact('company'));
    }
}
