@extends('layouts.adminlte')

@section('title','management Lowongan Kerja')

@section('nama_halaman','Lowongan Kerja')


@section('css')

  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('AdminLte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">

@endsection

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  
  


<div class="col-md-12">
    <div class="card card-primary card-outline">
    <div class="card-header">
    <h3 class="card-title">
    <i class="fas fa-edit"></i>
      Data postingan Lowongan Kerja
    </h3>
    </div>
    <div class="card-body pad table-responsive">
      <a class="btn btn-sm btn-success mb-3" href="{{url('management/lowongan-kerja/create')}}" id="tambahLoker"> Tambahkan lowongan Kerja</a>
    <table  class="table table-bordered table-hover table-sm data-table table-sm table-striped">
    <thead class="table-primary">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>tanggal upload</th>
        <th>status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($post as $post)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$post->title}}</td>
              <td>{{$post->kategori->name}}</td>
              <td>{{$post->created_at}}</td>
              @if($post->status == 'success')
              <td><span class="badge badge-success">sudah disetujui</span></td>
              @endif
              @if($post->status == 'failed')
              <td><span class="badge badge-danger">tidak disetujui</span></td>
              @endif
                @if($post->status == 'pending')
              <td><span class="badge badge-warning">Dalam Peninjauan</span></td>
              @endif
              <td>
            @if($post->status == 'pending')
                  <a class="btn btn-info btn-sm kosong"><i class="fas fa-eye"></i></a>
            @endif
            @if($post->status == 'success')
                  <a href="{{route('detail.lowongan-kerja2',$post->slug)}}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
            @endif
            @if($post->status == 'failed')
                  <a class="btn btn-warning btn-sm"><i class="fas fa-info-circle"></i></a>
            @endif
                  <a href="{{route('lowongan-kerja.edit',$post->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                  <form action="{{route('lowongan-kerja.destroy',$post->slug)}}" class="form-delete" method="POST" style="display: inline-block;">
                  @csrf
                  @method('delete')
                  </form>
                    <button class="btn btn-sm btn-danger delete" title="Hapus postingan" text="Apakah Anda yakin ingin menghapus postingan ini?"><i class="fas fa-trash"></i></button>
              </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <!-- /.card -->
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

$('.kosong').click(function() {
      Toast.fire({
    icon: 'warning',
    title: 'Status Postingan masih dalam Peninjauan Admin'
  });
});


$('.delete').click(function()
{
  var title = $(this).attr('title');
  var text = $(this).attr('text');

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
    $('.form-delete').submit();
  }
});
});

</script>



<script type="text/javascript">
  $(document).ready(function(){
    $('.table').DataTable();
  })
</script>


@endsection