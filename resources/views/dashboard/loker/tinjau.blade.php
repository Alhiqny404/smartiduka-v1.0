@extends('layouts.adminlte')

@section('title','Kategori')

@section('nama_halaman','management Loker')

@section('css')
@endsection

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  
    {{$post}}

    {{$post->user->email}}

    <form method="post" action="" id="setujui">
      @csrf
      <input type="hidden" name="status" value="success">
    </form>
      <button class="btn btn-success setujui" type="submit">Setujui</button>
    <br>
    <form method="post" action="" id="tolak">
      @csrf
      <input type="hidden" name="status" value="failed">
    </form>
      <button class="btn btn-danger tolak" type="submit">Tolak</button>





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
  text:"position ini akan terlihat dihalaman home user",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
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
  text:"position ini tidak akan tampil dihalaman home user",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
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