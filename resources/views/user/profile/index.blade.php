

@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/detail.css')}}">
@endsection

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <!-- {{$profile}} -->

  <div class="container">
    <div class="row">
        <div class="card card-widget widget-user col-md-8 p-0">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-primary">
                <h3 class="widget-user-username">{{$profile->name}}</h3>
                <h5 class="widget-user-desc">{{$profile->pendidikan}}</h5>
                <a href="{{route('profile.edit',$profile->id)}}" class="edit"><i class="fas fa-user-edit"></i></a>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="{{asset('frontend/img/user.png')}}" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Pengalaman</h5>
                      <span class="description-text">{{$profile->pengalaman}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">Keahlian</h5>
                      <span class="description-text">{{$profile->keahlian}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">Penghargaan</h5>
                      <span class="description-text">{{$profile->penghargaan}}</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>

        <!-- <div class="experience">
            
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
        </div> -->


      <div class="col-md-4">
        <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Data Tambahan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tinggi Badan : 
                    <span class="badge badge-info badge-pill">{{$profile->tg_badan}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Berat Badan :
                    <span class="badge badge-info badge-pill">{{$profile->brt_badan}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Status Pernikahan :
                    <span class="badge badge-info badge-pill">{{$profile->status_nikah}}</span>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
      <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">BIODATA</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Alamat : 
                    <span class="badge-pill">{{$profile->alamat}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Tempat Tanggal Lahir : 
                    <span class="badge-pill">{{$profile->kota_lahir}}, {{$profile->tgl_lahir}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Jenis Kelamin :
                    <span class="badge-pill">{{$profile->jk}}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Agama :
                    <span class="badge-pill">{{$profile->agama}}</span>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-6">
            <div class="info-box bg-facebook text-white">
              <span class="info-box-icon"><i class="fab fa-facebook-f"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Facebook</span>
                <span class="info-box-number">{{$profile->facebook}}</span>
              </div>
                <!-- /.info-box-content -->
            </div>
              
            <div class="info-box bg-instagram text-white">
              <span class="info-box-icon"><i class="fab fa-instagram"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Instagram</span>
                  <span class="info-box-number">{{$profile->instagram}}</span>
                </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box bg-twitter text-white">
              <span class="info-box-icon"><i class="fab fa-twitter"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Twitter</span>
                <span class="info-box-number">{{$profile->twitter}}</span>
              </div>
            </div>
        
            <div class="info-box bg-google text-white">
              <span class="info-box-icon"><i class="fab fa-google-plus-g"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Gmail</span>
                <span class="info-box-number"></span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

            
  <!-- <a class="btn btn-primary" href="{{route('profile.edit',$profile->id)}}"><i class="fas fa-pen"></i></a> -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection


