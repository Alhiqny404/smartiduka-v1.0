

@extends('layouts.userlayout')

@section('title','Dashboard')
@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/perusahaanProfile.css')}}">
@endsection

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="container">
    <div class="perusahaan-container bg-white">
      <!-- {{$company}} -->
      <div class="perusahaan-header bg-info">
        <div class="row">
          <div class="col-sm-2">
            <img src="{{$company->logo()}}" alt="" width="100px" height="100px">
          </div>
          <div class="col-sm-10">
              <h1>{{$company->name}}</h1>
          </div>
        </div>
      </div>
      <div class="perusahaan-body">  
        <div class="row">
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Deskripsi</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <p>{!!$company->deskripsi!!}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Contact</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body" style="display: block;">
                    <p><i class="fas fa-phone-alt"></i> {{$company->office_phone}}</p>
                    <p><i class="fas fa-envelope"></i> {{$company->email_person}}</p>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-danger">
                    <div class="card-header">
                      <h3 class="card-title">Social Media</h3>
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body" style="display: block;">
                      <p><i class="fab fa-instagram"></i>{{$company->instagram}}</p>
                      <p><i class="fab fa-facebook-f"></i> {{$company->facebook}}</p>
                      <p><i class="fab fa-twitter"></i> {{$company->twitter}}</p>
                    </div>
                    <!-- /.card-body -->
                </div>
              </div>
              <div class="col-md-3">
                
              <a class="btn btn-outline-primary" href="{{route('home')}}">KEMBALI KE HOME</a>
              <br><br>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info-box">
                 <span class="info-box-icon bg-primary"><i class="far fa-envelope"></i></span>
  
                 <div class="info-box-content">
                   <span class="info-box-text">Pesan</span>
                   <span class="info-box-number">410</span>
                 </div>
            </div>
            <div class="info-box">
                 <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
  
                 <div class="info-box-content">
                   <span class="info-box-text">Pesan</span>
                   <span class="info-box-number">410</span>
                 </div>
            </div>

             <div class="info-box">
                  <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

                  <div class="info-box-content">
                    <span class="info-box-text">Uploads</span>
                    <span class="info-box-number">5</span>
                  </div>
             </div>

           </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection


