@extends('layouts.adminlte')

@section('title','Kategori')

@section('nama_halaman','management Loker')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  

<div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Lowongan kerja Belum Ditinjau</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-sm data-table table-striped">
         <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Perusahaan</th>
          <th>Judul Lowongan Kerja</th>
          <th>Kategori</th>
          <th>Tanggal Upload</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
        </table>
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
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{url('/dashboard/management/loker/belum-ditinjau') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'company_name', name: 'company_name'},
            {data: 'title', name: 'title'},
            {data: 'kategori', name: 'kategori'},
            {data: 'waktu', name: 'waktu'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
  });

   $('body').on('click', '.tinjau', function () {
    var slug = $(this).data('id');
        window.location = "{{url('/dashboard/management/loker')}}"+'/'+slug+'/tinjau';
   });
  });
</script>

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


@if(Session::has('success'))
  Toast.fire({
  icon: 'success',
  title: "{{Session('success')}}"
  });
@endif  


</script>
      


@endsection