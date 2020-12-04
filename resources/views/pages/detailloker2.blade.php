
@extends('layouts.adminlte')

@section('title','Dashboard')
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/myCSS/tinjau.css')}}">
@endsection
@section('content')

<div class="container-fluid tinjau-container">

      <div class="row">
				<div class="col-md desk bg-white">
          <i class="fas fa-building bg-primary"></i>
					<span>Perusahaan :</span>
					<p>{{$post->user->profileCompany->name}}</p>
				</div>
				<!-- <div class="col-md desk bg-white">
					<i class="fas fa-portrait bg-info"></i>
					<span>Sebagai :</span>
					<p>{{$post->sbg}}</p>
				</div> -->
        <div class="col-md desk bg-white">
        <i class="fas fa-clipboard-list bg-danger"></i>
					<span>Kategori :</span>
					<p>{{$post->kategori->name}}</p>
				</div>
				<div class="col-md desk bg-white">
        <i class="fas fa-address-book bg-success"></i>
					<span>Sebagai :</span>
					<p>{{$post->sbg}}</p>
				</div>
				<div class="col-md desk bg-white">
          <i class="fas fa-archive bg-warning"></i>
					<span>Kuota :</span>
					<p>Dibutuhkan {{$post->kuota}} Orang</p>
				</div>
      </div>

      <br>
      
      <div class="row">
        <div class="col-md-4">
          <div class="info-box">    
            <span class="info-box-icon bg-success"><i class="fas fa-money-bill-wave-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Gaji :</span>
              <span class="info-box-number">RP. {{$post->min_gaji}}- RP. {{$post->max_gaji}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box">    
            <span class="info-box-icon bg-info"><i class="fas fa-map-marker-alt"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lokasi :</span>
              <span class="info-box-number">{{$post->lokasi}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <div class="info-box">    
            <span class="info-box-icon bg-danger"><i class="fas fa-graduation-cap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Kualifikasi</span>
              <span class="info-box-number">{{$post->kualifikasi}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-md-8">
          <div class="container-tinjau-deskripsi bg-white w-100 h-100">
            <div class="tinjau-header bg-primary px-4 py-3">
              <h3>Deskripsi</h3>
            </div>
            <div class="tinjau-body px-4 py-3">
              <p>{{$post->deskripsi}}</p>
            </div>
            <div class="tinjau-footer bg-light">
                  <a href="/management/lowongan-kerja" class="btn btn-secondary text-white"><i class="fas fa-caret-left"></i></i> Kembali</a>
            </div>
          </div>
        </div>
      </div>

    





</div>

@role('user')
    @if($pelamar->count() > 0)
        @if($pelamar->first()->status == 'success')
        <h1>Anda Telah diterima bekerja diperusahaan ini</h1>
        @endif
    @endif


    @if($pelamar->count() > 0)
        @if($pelamar->first()->status == 'failed')
        <h1>Mohon maaf lamaran anda ditolak</h1>
        @endif
    @endif

    @if($pelamar->count() > 0)
        @if($pelamar->first()->status == 'pending')
            <a url="{{route('lowongan-kerja.hapus',$pelamar->first()->id)}}" title="Lamaran Akan Dibatalkan" text="Lamaran anda akan Dibatalkan" class="btn btn-danger btn-sm coba">Batalkan Lamaran</a>
        @endif
    @endif

    @if($pelamar->count() <= 0)
    <form method="POST" action="{{route('lowongan-kerja.melamar',$post->id)}}" class="melamar">
        @csrf
        <input type="hidden" name="company_id" value="{{$post->user_id}}">
        <input type="hidden" name="post_id" value="{{$post->user_id}}">
        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    </form>
        <button class="btn btn-primary lamar" title="Mengirim lamaran Anda" text="Data diri dan lampiran anda akan dikirim ke perusahaan terkait">Lamar Sekarang</button>
    @endif
        <br>
        @if(simpanloker($post->id)->count() == 0)
<form method="POST" action="{{route('simpan.loker')}}">
    @csrf
    <input type="hidden" name="post_id" value="{{$post->id}}">
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
    <button class="btn btn-warning">Simpan lowongan kerja ke favorit</button>
</form>
@endif
@if(simpanloker($post->id)->count() > 0)
<a url="{{route('nonsimpan.loker',$post->id)}}" class="btn btn-danger coba" title="menghapus dari daftar favorit" text="Postingan ini akan dihapus dari daftar favorit">Batal Simpan lowongan kerja ke favorit</a>

@endif

@endrole


@endsection


@section('js')

<script type="text/javascript">
    


// SWAL DI KANAN ATAS
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



@if(Session::has('success'))
    Toast.fire({
    icon: 'success',
    title: "{{Session('success')}}"
    });
@endif  



$('.coba').click(function()
{
    var title = $(this).attr('title');
    var text = $(this).attr('text');
    var url = $(this).attr('url');

    Swal.fire({
  title: title,
  text:text,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    window.location = url;
  }
});
});

$('.lamar').click(function()
{
    var title = $(this).attr('title');
    var text = $(this).attr('text');
    var url = $(this).attr('url');

    Swal.fire({
  title: title,
  text:text,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $('.melamar').submit();
  }
});
});


</script>


@endsection