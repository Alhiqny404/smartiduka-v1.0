@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/upload.css')}}">
@endsection

@section('content')

<div class="container">
  <div class="upload-container">
    <div class="upload-header bg-white card card-primary card-outline">
     <h1>UPLOAD pasfoto</h1>
    </div>

    <div class="upload-body bg-light">
      <div class="row">
        <div class="col-md">
          <form method="POST" action="{{route('pasfoto.up',auth()->user()->id)}}" enctype="multipart/form-data">
            @csrf
            <input type="file" name="pasfoto" value="{{$pasfoto->pasfoto}}" class="btn btn-outline-primary">
            <button type="submit" class="btn btn-primary">Upload</button>
          </form>
          <br>
          <a href="/user/upload">kembali</a>
        </div>
        <div class="col-md">
          @php $path = Storage::url('pasfoto/'.$pasfoto->pasfoto); @endphp
          <tr>
            <td><img src="{{ url($path) }}" width="200px" height="100px"></td>
            <td><a href="{{ url($path) }}">Download</a></td>
          </tr>

          {{$pasfoto->pasfoto}}
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="row">
    <div class="col-md">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">BIODATA</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body" style="display: block;">
          <h1>kuekgfuie</h1>
        </div>
      </div>
    </div>

    <div class="col-md">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">BIODATA</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body" style="display: block;">
          <h1>kuekgfuie</h1>
        </div>
      </div>
    </div>
  </div> -->
</div>

@endsection
