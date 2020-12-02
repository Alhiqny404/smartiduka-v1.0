@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/upload.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="upload-container">
    <div class="upload-header bg-primary">
     <h1>UPLOAD pasfoto</h1>
    </div>

    <div class="upload-body">
      <form method="POST" action="{{route('pasfoto.up',auth()->user()->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="pasfoto" value="{{$pasfoto->pasfoto}}" class="btn btn-outline-primary">
        <button type="submit" class="btn btn-primary">Upload</button>
      </form>

      <hr>

      @php $path = Storage::url('pasfoto/'.$pasfoto->pasfoto); @endphp
      <tr>
        <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
        <td><a href="{{ url($path) }}">Download</a></td>
      </tr>

      {{$pasfoto->pasfoto}}
    </div>
  </div>
  <a href="/user/upload">kembali</a>
</div>

@endsection
