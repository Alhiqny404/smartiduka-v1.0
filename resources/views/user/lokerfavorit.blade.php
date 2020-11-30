@extends('layouts.userlayout')

@section('title','lowongan tersimpan')

@section('nama_halaman','Lowongan Kerja Tersimpan')



@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  
    <div class="card mb-3">
      <div class="card-header">
        <h3>Lowongan Kerja Disimpan</h3>
      </div>
      <div class="card-body">
        <table class="table table-hover table-sm table-striped" id="table-lamaran">
          <thead class="table-primary">
            <tr>
              <th>No</th>
              <th>Nama Perusahaan</th>
              <th>Judul Loker</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($lokerfavorit as $lf)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$lf->loker->user->profileCompany->name}}</td>
              <td>{{$lf->loker->title}}</td>
              <td><a href="{{route('nonsimpan.loker',$lf->loker->id)}}" class="btn btn-danger btn-sm" onclick="confirm('Anda akan menghapus dari faftar lowongan kerja favorit?')"><i class="fas fa-times"></i></a></td>
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


<script>
    $(document).ready(function() {
    $('#table-lamaran').DataTable();
} );
</script>

@endsection