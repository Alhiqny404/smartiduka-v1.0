

@extends('layouts.userlayout')

@section('css')

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('AdminLte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

@endsection


@section('title','Edit Profile')



@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">

    <div class="row">
        <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Profile Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                    <div class="form-group">
                         <img width="300px" src="{{auth()->user()->profile->foto()}}">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input disabled="" type="text" class="form-control" name="name" value="{{$profile->name}}"></input>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Kota Lahir</label>
                                <input disabled="" type="text" class="form-control" name="kota_lahir" value="{{$profile->kota_lahir}}"></input>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input  disabled=""type="date" class="form-control" name="tgl_lahir" value="{{$profile->tgl_lahir}}"></input>
                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Tinggi Badan</label>
                                <input disabled="" type="text" class="form-control" name="tg_badan" value="{{$profile->tg_badan}}"></input>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                        <label>Berat Badan</label>
                        <input  disabled=""type="text" class="form-control" name="brt_badan" value="{{$profile->brt_badan}}"></input>
                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select disabled="" class="form-control" name="jk">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" @if($profile->jk == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($profile->jk == 'Perempuan') selected @endif>Perempun</option>
                                </select>
                            </div>
                        </div>
                            <div class="col">
                    <div class="form-group">
                        <label>status Pernikahan</label>
                        <select disabled="" class="form-control" name="status_nikah">
                            <option value="">Pilih status Pernikahan</option>
                                    @foreach(status_nikah() as $status)
                                        <option value="{{$status->name}}" @if($profile->status_nikah == $status->name) selected @endif>{{$status->name}}</option>
                                    @endforeach
                        </select>
                    </div>
                            </div>
                    </div>
                                <div class="form-group">
                                <label>Agama</label>
                                <input disabled="" type="text" class="form-control" name="agama" value="{{$profile->agama}}"></input>
                                </div>
                    <div class="from-group">
                        <label>Alamat Lengkap</label>
                        <textarea disabled="" class="form-control" name="alamat">{{$profile->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input disabled="" type="text" class="form-control" name="no_hp" value="{{$profile->no_hp}}"></input>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input disabled="" type="text" class="form-control" name="email" value="{{$profile->email}}"></input>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input disabled="" type="text" class="form-control" name="website" value="{{$profile->website}}"></input>
                    </div>
                    <div class="from-group">
                        <label>Pendidikan Terakhir</label>
                        <input disabled="" type="text" class="form-control" name="pendidikan" value="{{$profile->pendidikan}}"></input>
                    </div>
                    <div class="from-group">
                        <label>Penghargaan Terbesar</label>
                        <input type="text" class="form-control" name="penghargaan" value="{{$profile->penghargaan}}"></input>
                    </div>
                    <div class="from-group">
                        <label>Pengalaman Kerja</label>
                        <textarea disabled="" class="form-control" name="pengalaman">{{$profile->pengalaman}}</textarea>
                    </div>
                    <div class="from-group">
                        <label>Keahlian yang Dimiliki</label>
                        <textarea disabled="" class="form-control" name="keahlian">{{$profile->keahlian}}</textarea>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
</div>
        </div>
        <div class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Profile Saya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('profile.update', $profile->id)}}" class="form-group" enctype="multipart/form-data">
                 @csrf
                 @method('patch')
                    <div class="form-group">
                        <label>Foto Profile</label>
                        <input type="file" name="foto">
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" name="name" value="{{$profile->name}}"></input>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            <label>Kota Lahir</label>
                            <input type="text" class="form-control" name="kota_lahir" value="{{$profile->kota_lahir}}"></input>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{$profile->tgl_lahir}}"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                            <label>Tinggi Badan</label>
                            <input type="text" class="form-control" name="tg_badan" value="{{$profile->tg_badan}}"></input>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                            <label>Berat Badan</label>
                            <input type="text" class="form-control" name="brt_badan" value="{{$profile->brt_badan}}"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jk">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki" @if($profile->jk == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($profile->jk == 'Perempuan') selected @endif>Perempun</option>
                                </select>
                            </div>
                        </div>
                            <div class="col">
                    <div class="form-group">
                        <label>status Pernikahan</label>
                        <select class="form-control" name="status_nikah">
                            <option value="">Pilih status Pernikahan</option>
                            @foreach(status_nikah() as $status)
                            <option value="{{$status->name}}"@if($profile->status_nikah == $status->name) selected @endif>{{$status->name}}</option>
                            @endforeach
                        </select>
                    </div>
                            </div>
                    </div>
                                <div class="form-group">
                                <label>Agama</label>
                                <input type="text" class="form-control" name="agama" value="{{$profile->agama}}"></input>
                                </div>
                    <div class="from-group">
                        <label>Alamat Lengkap</label>
                        <textarea class="form-control" name="alamat">{{$profile->alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nomor Handphone</label>
                        <input type="text" class="form-control" name="no_hp" value="{{$profile->no_hp}}"></input>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="{{$profile->email}}"></input>
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input type="text" class="form-control" name="website" value="{{$profile->website}}"></input>
                    </div>
                    <div class="from-group">
                        <label>Pendidikan Terakhir</label>
                        <input type="text" class="form-control" name="pendidikan" value="{{$profile->pendidikan}}"></input>
                    </div>
                    <div class="from-group">
                        <label>Penghargaan Terbesar</label>
                        <input type="text" class="form-control" name="penghargaan" value="{{$profile->penghargaan}}"></input>
                    </div>
                    <div class="from-group">
                        <label>Pengalaman Kerja</label> 
                        <textarea class="form-control" name="pengalaman">{{$profile->pengalaman}}</textarea>
                    </div>
                    <div class="from-group">
                        <label>Keahlian yang Dimiliki</label>
                        <textarea class="form-control" name="keahlian">{{$profile->keahlian}}</textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Simpan</button>
                        <a href="/user/profile" class="btn btn-secondary"><i class="fas fa-caret-left"></i> Kembali</a>
                    </div>
                </form>
              </div>
              <!-- /.card-body -->
</div>
        </div>
    </div>



</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->

@endsection




<!------------------------------------ BAGIAN JAVASCRIPT ------------------------------------------>


@section('js')

<!-- SweetAlert2 -->
<script src="{{asset('AdminLte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script type="text/javascript">

 /*$(function() {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });
@if(Session::has('success'))
      Toast.fire({
        icon: 'success',
        title: "{{Session('success')}}"
      });
     
  @endif
 }); */
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 4000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});


const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});

@if(Session::has('success'))
      Toast.fire({
        icon: 'success',
        title: "{{Session('success')}}"
      });
     
  @endif

</script>


@endsection