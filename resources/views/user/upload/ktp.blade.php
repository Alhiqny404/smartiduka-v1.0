@extends('layouts.userlayout')

@section('title','Dashboard')

@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/upload.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="upload-container">
    <div class="upload-header bg-success">
      <h1>UPLOAD ktp</h1>
    </div>

    <div class="upload-body">
      <form method="POST" action="{{route('ktp.up',auth()->user()->id)}}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="ktp" value="{{$ktp->ktp}}" class="btn btn-outline-success">
        <button type="submit" class="btn btn-success">Upload</button>
      </form>

      <hr>

      @php $path = Storage::url('ktp/'.$ktp->ktp); @endphp
          <tr>
            <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
            <td><a href="{{ url($path) }}" class="text-success">Download</a></td>
          </tr>

          {{$ktp->ktp}}
      </div>
  </div>
  <a href="/user/upload">kembali</a>
</div>

@endsection
