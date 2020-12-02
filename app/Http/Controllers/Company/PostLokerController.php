<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\PostLoker;
use Illuminate\Support\Str;
use DataTables;

class PostLokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Kategori = Kategori::all();
        $post = PostLoker::where('user_id',auth()->user()->id)->get();
        return view('company.postloker.index',compact('post','Kategori'));
        
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Kategori = Kategori::all();
        return view('company.postloker.create',compact('Kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


     
        PostLoker::create([
        'title' => $request->title,
        'kategori_id' => $request->kategori_id,
        'user_id' => auth()->user()->id,
        'lokasi' => $request->lokasi,
        'sbg' => $request->sbg,
        'kuota' => $request->kuota,
        'kualifikasi' => $request->kualifikasi,
        'min_gaji' => $request->min_gaji,
        'deskripsi' => $request->deskripsi,
        'max_gaji' => $request->max_gaji,
        'slug' => Str::slug($request->title),
        'status' => 'pending'

        ]);     
   
        return redirect()->route('lowongan-kerja.index')->with('success',"lowongan kerja Berhasil Ditambahkan!");
    }

    /**''
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
        $post = PostLoker::find($id);
        $Kategori = Kategori::all();

        return view('company.postloker.edit',compact('post','Kategori'));
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
        
     
        PostLoker::whereId($id)->update([
        'title' => $request->title,
        'kategori_id' => $request->kategori_id,
        'lokasi' => $request->lokasi,
        'sbg' => $request->sbg,
        'kualifikasi' => $request->kualifikasi,
        'min_gaji' => $request->min_gaji,
        'max_gaji' => $request->max_gaji,
        'deskripsi' => $request->deskripsi,
        'slug' => Str::slug($request->title),
        ]);

        return redirect()->route('lowongan-kerja.index')->with('success',"lowongan kerja Berhasil Diupdate!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        PostLoker::where('slug',$slug)->delete();
     
       return redirect()->back()->with('success','Postingan Berhasil Dihapus');
    }
}
