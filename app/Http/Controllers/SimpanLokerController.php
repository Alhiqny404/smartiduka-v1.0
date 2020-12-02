<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SimpanLoker;

class SimpanLokerController extends Controller
{

    public function index()
    {
        $lokerfavorit = Simpanloker::where('user_id',auth()->User()->id)->get();
        return view('user.lokerfavorit',compact('lokerfavorit'));
    }

    public function create(Request $request)
    {
    	SimpanLoker::create([
    		'user_id' => $request->user_id,
    		'post_id' => $request->post_id,
    	]);

    	return redirect()->back()->with('success','Posingan Berhasil Disimpan Dari daftar Favorit!');
    }

    public function destroy($post_id)
    {
    	Simpanloker::where('user_id',auth()->User()->id)->where('post_id',$post_id)->delete();
    	return redirect()->back()->with('success','Posingan Sudah Dihapus Dari daftar Favorit!');
    }
}
