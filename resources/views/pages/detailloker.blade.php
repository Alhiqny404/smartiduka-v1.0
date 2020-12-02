
@extends('layouts.userlayout')

@section('title','Dashboard')

@section('css')
  <link rel="stylesheet" href="{{asset('frontend/css/myCSS/detail.css')}}">
@endsection

@section('content')

<!-- {{$post}}
<br>
{{$pelamar->count()}}
<br>
<br>
<br>
{{simpanloker($post->id)->first()}}
<br>
<br> -->

	<div class="container">
	<h1>{{$post->user->profileCompany->name}}</h1>
		<div class="detail-loker-row-container">
			<div class="row">
				<div class="col-md desk bg-white">
					<i class="fas fa-briefcase bg-warning"></i>
					<span>Pekerjaan :</span>
					<p>{{$post->title}}</p>
				</div>
				<!-- <div class="col-md desk bg-white">
					<i class="fas fa-portrait bg-info"></i>
					<span>Sebagai :</span>
					<p>{{$post->sbg}}</p>
				</div> -->
				<div class="col-md desk bg-white">
					<i class="fas fa-graduation-cap bg-danger"></i>
					<span>Kualifikasi :</span>
					<p>{{$post->kualifikasi}}</p>
				</div>
				<div class="col-md desk bg-white">
					<i class="fas fa-map-marker-alt bg-primary"></i>
					<span>Lokasi :</span>
					<p>{{$post->lokasi}}</p>
				</div>
				<div class="col-md desk bg-white">
					<i class="fas fa-money-bill-wave-alt bg-success"></i>
					<span>Rata gaji :</span>
					<p>{{$post->min_gaji}}, {{$post->max_gaji}}</p>
				</div>
			</div>

			<div class="detail-warning">
				<h3 class="bg-info">PENGUMUMAN!! {{$post->user->profileCompany->name}}</h3>
			</div>
			<div class="detail-loker-container bg-white">
				
			<p>{!!$post->deskripsi!!}</p>
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
			</div>
		</div>
	</div>

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