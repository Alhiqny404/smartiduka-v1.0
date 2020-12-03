<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Uploads;

class UploadsController extends Controller
{

	public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

	public function index()
	{
		$upload = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.index',compact('upload'));
	}

	/* ------------------------------------ UPLOAD CV -----------------------------------*/

	public function cv()
	{
		$cv = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.cv',compact('cv'));
	}
	public function cvUp(Request $request,$id)
	{
		$request->validate([
			'cv' => 'required','file','mimes:jpg,jpeg,png,doc,docx,pdf',
		]);

		if($request->hasFile('cv'))
		{
			Storage::putFileAs('public/cv',$request->file('cv'),time().'.'.$request->cv->extension());
			Uploads::where('user_id',$id)->update(['cv'=>time().'.'.$request->cv->extension()]);
		}
		return redirect()->route('upload.index')->with('success','Data Berhasil Dilampirkan');
	}





	/* ------------------------------------ UPLOAD KTP -----------------------------------*/
	public function ktp()
	{
		$ktp = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.ktp',compact('ktp'));
	}
	public function ktpUp(Request $request,$id)
	{
		$request->validate([
			'ktp' => 'required','file','mimes:jpg,jpeg,png,doc,docx,pdf',
		]);

		if($request->hasFile('ktp'))
		{
			Storage::putFileAs('public/ktp',$request->file('ktp'),time().'.'.$request->ktp->extension());
			Uploads::where('user_id',$id)->update(['ktp'=>time().'.'.$request->ktp->extension()]);
		}
		return redirect()->route('upload.index')->with('success','Data Berhasil Dilampirkan');
	}





	/* ------------------------------------ UPLOAD IJAZAH -----------------------------------*/
	public function ijazah()
	{
		$ijazah = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.ijazah',compact('ijazah'));
	}
	public function IjazahUp(Request $request,$id)
	{
		$request->validate([
			'ijazah' => 'required','file','mimes:jpg,jpeg,png,doc,docx,pdf',
		]);

		if($request->hasFile('ijazah'))
		{
			Storage::putFileAs('public/ijazah',$request->file('ijazah'),time().'.'.$request->ijazah->extension());
			Uploads::where('user_id',$id)->update(['ijazah'=>time().'.'.$request->ijazah->extension()]);
		}
		return redirect()->route('upload.index')->with('success','Data Berhasil Dilampirkan');
	}



		/* ------------------------------------ UPLOAD SKCK -----------------------------------*/
	public function skck()
	{
		$skck = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.skck',compact('skck'));
	}
	public function SkckUp(Request $request,$id)
	{
		$request->validate([
			'skck' => 'required','file','mimes:jpg,jpeg,png,doc,docx,pdf',
		]);

		if($request->hasFile('skck'))
		{
			Storage::putFileAs('public/skck',$request->file('skck'),time().'.'.$request->skck->extension());
			Uploads::where('user_id',$id)->update(['skck'=>time().'.'.$request->skck->extension()]);
		}
		return redirect()->route('upload.index')->with('success','Data Berhasil Dilampirkan');
	}




	/* ------------------------------------ UPLOAD SKD -----------------------------------*/
	public function skd()
	{
		$skd = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.skd',compact('skd'));
	}
	public function SkdUp(Request $request,$id)
	{
		$request->validate([
			'skd' => 'required','file','mimes:jpg,jpeg,png,doc,docx,pdf',
		]);

		if($request->hasFile('skd'))
		{
			Storage::putFileAs('public/skd',$request->file('skd'),time().'.'.$request->skd->extension());
			Uploads::where('user_id',$id)->update(['skd'=>time().'.'.$request->skd->extension()]);
		}
		return redirect()->route('upload.index')->with('success','Data Berhasil Dilampirkan');
	}







	/* ------------------------------------ UPLOAD PAS FOTO -----------------------------------*/
	public function pasfoto()
	{
		$pasfoto = Uploads::where('user_id',auth()->user()->id)->first();
		return view('user.upload.pasfoto',compact('pasfoto'));
	}
	public function PasfotoUp(Request $request,$id)
	{
		$request->validate([
			'pasfoto' => 'required','file','mimes:jpg,jpeg,png,doc,docx,pdf',
		]);

		if($request->hasFile('pasfoto'))
		{
			Storage::putFileAs('public/pasfoto',$request->file('pasfoto'),time().'.'.$request->pasfoto->extension());
			Uploads::where('user_id',$id)->update(['pasfoto'=>time().'.'.$request->pasfoto->extension()]);
		}
		return redirect()->route('upload.index')->with('success','Data Berhasil Dilampirkan');
	}


}
