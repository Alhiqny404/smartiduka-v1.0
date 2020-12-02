@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/upload.css')}}">
@endsection

@section('content')


<div class="container">
  <div class="upload-container">
    <div class="upload-header bg-danger">
      <h1>UPLOAD ijazah</h1>
    </div>
    <div class="upload-body">
      <form method="POST" action="{{route('ijazah.up',auth()->user()->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="ijazah" value="{{$ijazah->ijazah}}" class="btn btn-outline-danger">
        <button type="submit" class="btn btn-danger">Upload</button>
      </form>

      <hr>

      @php $path = Storage::url('ijazah/'.$ijazah->ijazah); @endphp
        <tr>
          <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
          <td><a href="{{ url($path) }}" class="text-danger">Download</a></td>
        </tr>

        {{$ijazah->ijazah}}
    </div>
  </div>
  <a href="/user/upload">kembali</a>
</div>

@endsection