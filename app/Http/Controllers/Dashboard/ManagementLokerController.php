<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PostLoker;
use App\Mail\NotifTinjauLoker;
use DataTables;
use Carbon\Carbon;

class ManagementLokerController extends Controller
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
    public function indexnotpending(Request $request)
    {
            $postPending = PostLoker::where('status','pending')->get();
            $postNotPending = PostLoker::where('status','!=','pending')->get();


            if ($request->ajax()) {
                $data = PostLoker::where('status','!=','pending')->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('company_name',function($data){
                            return $data->user->profileCompany->name;
                        })
                        ->addColumn('waktu',function($row){
                            return $row->created_at->isoFormat('D MMMM Y');
                        })
                        ->addColumn('kategori', function($row){
                            return $row->kategori->name;
                        })
                        ->addColumn('action', function($row){
       
                               $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook"><i class="fas fa-edit"></i></a>';
       
                               $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook"><i class="fas fa-trash"></i></a>';
        
                                return $btn;
                        })
                        ->rawColumns(['action','company_name'])
                        ->make(true);
            }

            return view('dashboard.loker.indexnotpending',compact('postPending','postNotPending'));
    }


     public function indexpending(Request $request)
    {
            


            if ($request->ajax()) {
                $data = PostLoker::where('status','pending')->get();
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('waktu',function($row){
                            return $row->created_at->isoFormat('D MMMM Y');
                        })
                        ->addColumn('company_name',function($data){
                            return $data->user->profileCompany->name;
                        })
                        ->addColumn('kategori', function($row){
                            return $row->kategori->name;
                        })
                        ->addColumn('action', function($row){
       
                               $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-primary btn-sm tinjau"><i class="fa fa-info" aria-hidden="true"></i> Tinjau</a>';
       
                                return $btn;
                        })
                        ->rawColumns(['action','company_name','kategori'])
                        ->make(true);
                }

        return view('dashboard.loker.indexpending');
    }

   
    public function tinjauGet($id)
    {
        $post = PostLoker::where('id',$id)->first();

        return view('dashboard.loker.tinjau',compact('post'));
    }

    public function tinjauPost(Request $request,$id)
    {
        PostLoker::where('id',$id)->update(['status' => $request->status]);
        $email = PostLoker::where('id',$id)->first()->user->email;
        $body = [
            'status' => $request->status,
            'title' => PostLoker::where('id',$id)->first()->title,
            'created_at' => PostLoker::where('id',$id)->first()->created_at->isoFormat('D MMMM Y'),
        ];

        \Mail::to($email)->send(new NotifTinjauLoker($body));

        return redirect()->route('management.loker.indexpending')->with('success','Postingan Berhasil Ditinjau');
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
        $data = PostLoker::find($id);
        return response()->json($data);
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
        //
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
