

@extends('layouts.userlayout')

@section('title','Dashboard')

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <!-- {{$profile}} -->

  <div class="container">
    <div class="row">
      <div class="col-md left">
        <div class="general">
          <div class="cardHeader bg-primary">
            <img src="{{asset('frontend/img/user.png')}}" alt="">
            <ul>
              <li><h5>{{$profile->name}}</h5></li>
              <li><p><i class="fas fa-medal"></i>{{$profile->pengalaman}}</p></li>
            </ul>
            <a class="edit" href="{{route('profile.edit',$profile->id)}}"><i class="fas fa-pen"></i></a>
          </div>

          <table class="table table-borderless">
          <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>{{$profile->jk}}</td>
            </tr>
            <tr>
              <td>Tempat tanggal lahir</td>
              <td>:</td>
              <td>{{$profile->kota_lahir}}, {{$profile->tgl_lahir}}</td>
            </tr>
            <tr>
              <td>Agama</td>
              <td>:</td>
              <td>{{$profile->agama}}</td>
            </tr>
            <tr>
              <td>Status nikah</td>
              <td>:</td>
              <td>{{$profile->status_nikah}}</td>
            </tr>
          </table>
        </div>

        <div class="experience">
            
            <div class="row">
              <div class="col-md pendidikan">
                <div class="row">
                  <div class="col-md-2 icon bg-primary">
                    <i class="fas fa-graduation-cap"></i> 
                  </div>
                  <div class="col-md-10">
                    <h6>Pendidikan</h6>
                    <p>{{$profile->name}}</p>
                  </div>
                </div>
              </div>
              <div class="col-md penghargaan">
                <div class="row">
                  <div class="col-md-2 icon bg-danger">
                    <i class="fas fa-award"></i>
                  </div>
                  <div class="col-md-10">
                    <h6> Penghargaan</h6>
                    <p>{{$profile->name}}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md pengalaman">
                <div class="row">
                  <div class="col-md-2 icon bg-success">
                    <i class="fas fa-vial"></i>
                  </div>
                  <div class="col-md-10">
                    <h6> Pengalaman</h6>
                    <p>{{$profile->name}}</p>
                  </div>
                </div>
                
              </div>
              <div class="col-md keahlian">
                <div class="row">
                  <div class="col-md-2 icon bg-warning">
                   <i class="fas fa-trophy"></i>
                  </div>
                  <div class="col-md-10">
                    <h6> Keahlian</h6>
                    <p>{{$profile->name}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      <div class="col-md">
        <h1>{{$profile->alamat}}</h1>
      </div>
    </div>
  </div>





  <!-- <a class="btn btn-primary" href="{{route('profile.edit',$profile->id)}}"><i class="fas fa-pen"></i></a> -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection


