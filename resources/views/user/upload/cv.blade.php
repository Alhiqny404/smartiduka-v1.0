
@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/upload.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="upload-container">
    <div class="upload-header bg-primary">
      <h1>UPLOAD CV</h1>
    </div>
    <div class="upload-body">
      <div class="row">
        <div class="col-md">
          <form method="POST" action="{{route('cv.up',auth()->user()->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="cv" value="{{$cv->cv}}" class="btn btn-outline-primary">
            <button type="submit" class="btn btn-primary">Upload</button>
          </form>
        </div>
        <div class="col-md">
          @php $path = Storage::url('cv/'.$cv->cv); @endphp
            <tr>
              <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
              <td><a href="{{ url($path) }}">Download</a></td>
            </tr>
        </div>
      </div>
    </div>
  </div>
  <a href="/user/upload">kembali</a>
</div>

@endsection