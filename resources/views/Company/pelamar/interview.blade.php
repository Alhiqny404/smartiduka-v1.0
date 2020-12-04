@extends('layouts.adminlte')

@section('title','management pelamar')

@section('nama_halaman','management pelamar')



@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
    <div class="card mb-3">
      <div class="card-header">
        <h3>Penjadwalan Interiew</h3>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col">
            <table class="table-sm">
              <tr>
                <th>Nama Pelamar</th>
                <td>:</td>
                <td>{{$pelamar->profile->name}}</td>
              </tr>
              <tr>  
                  <td>lainnya...</td>
              </tr>
            </table>
          </div>
          <div class="col">
            <form action="{{route('interview.pelamar.post',$pelamar->id)}}" method="POST">
              @csrf
              <input type="hidden" name="user_id" value="{{$pelamar->user->id}}">
          <div class="form-group">
            <label>Tempat (alamat lengkap dan tempat bertemu)</label>
              <input required type="text" name="tempat" class="form-control">
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Tanggal</label>
                <input required type="date" name="tanggal" class="form-control">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Waktu</label>
                <input required type="time" name="waktu" class="form-control">
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label>Deskripsi</label>
            <textarea class="form-control" name="deskripsi"></textarea>
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Jadwalkan Sekarang</button>
          </div>
        </form>
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


@endsection
