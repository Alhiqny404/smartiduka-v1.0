@extends('layouts.adminlte')

@section('title','Tinjau Loker')

@section('nama_halaman','')

@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/myCSS/tinjau.css')}}">
@endsection

@section('content')

<!-- Main content -->
<section class="content container">
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
              <span class="info-box-number">RP. {{$post->min_gaji}}- RP. {{$post->max_gaji}}}</span>
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
                <form method="post" action="" id="setujui">
                  @csrf
                  <input type="hidden" name="status" value="success">
                </form>
                  <button class="btn btn-success setujui" type="submit"><i class="fas fa-check"></i> Setujui</button>
                <br>
                <form method="post" action="" id="tolak">
                  @csrf
                  <input type="hidden" name="status" value="failed">
                </form>
                  <button class="btn btn-danger tolak" type="submit"><i class="fas fa-times"></i> Tolak</button>
                  <a href="/dashboard/management/loker/belum-ditinjau" class="btn btn-secondary text-white ml-auto"><i class="fas fa-caret-left"></i> Kembali</a>
            </div>
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

<script type="text/javascript">

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


$('.setujui').click(function()
{
  var title = $(this).attr('title');
  var text = $(this).attr('text');
  var url = $(this).attr('url');
  var nama = $(this).attr('nama');

  Swal.fire({
  title: "Setujui position",
  text:"Yakin untuk meng-izinkan Lowongan Pekerjaan??",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya Izinkan'
}).then((result) => {
  if (result.isConfirmed) {
    $('#setujui').submit();
  }
});
});



$('.tolak').click(function()
{
  var title = $(this).attr('title');
  var text = $(this).attr('text');
  var url = $(this).attr('url');
  var nama = $(this).attr('nama');

  Swal.fire({
  title: "Blokir position",
  text:"Yakin untuk menolak peng-upload-an Lowongan Pekerjaan??",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Ya Tolak'
}).then((result) => {
  if (result.isConfirmed) {
    $('#tolak').submit();
  }
});
});



@if(Session::has('success'))
  Toast.fire({
  icon: 'success',
  title: "{{Session('success')}}"
  });
@endif  


$('.kosong').click(function() {
      Toast.fire({
    icon: 'warning',
    title: 'Anda Belum Melampirkan Berkasnya'
  });
});

</script>

@endsection