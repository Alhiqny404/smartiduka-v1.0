@extends('layouts.adminlte')

@section('title','Kategori')

@section('nama_halaman','management Loker')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  

<div class="card card-primary card-outline">
      <div class="card-header">
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-sm data-table table-striped">
         <thead>
        <tr>
          <th>No</th>
          <th>Nama Pelamar</th>
          <th>Lowongan Kerja</th>
          <th>Perusahaan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
          @foreach($pelamar as $plmr)
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$plmr->user->profile->name}}</td>
          <td>{{$plmr->post->title}}</td>
          <td>{{$plmr->company->name}}</td>
          <td></td>
        </tr>
        @endforeach
      </tbody>
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
  $(document).ready(function(){
    $('.table').DataTable();
  })
</script>
      


@endsection