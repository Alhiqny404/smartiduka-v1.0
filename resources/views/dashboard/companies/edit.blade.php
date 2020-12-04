@extends('layouts.adminlte')

@section('title','Edit Perusaan')

@section('nama_halaman','Mengedit Perusahaan')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  

<div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> Edit Perusahaan Dengan id </h3>
      </div>
      <div class="card-body">
          <form class="form" action="{{route('companies.update',$company->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="form-group">
              <label>Username</label>
              <input class="form-control @error('username') is-invalid @enderror"  type="text" name="username"  placeholder="kosongkan jika Username tidak diubah">
              @error('username')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror 
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control @error('email') is-invalid @enderror" type="email" name="email"  placeholder="kosongkan jika Email tidak diubah">
              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror 
            </div>
            <div class="form-group">
              <label>Password</label>
              <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" autocomplete="new-password" placeholder="kosongkan jika password tidak diubah">
              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror 
            </div>

            <div class="form-group">
              <label>Konfirmasi Password</label>
              <input class="form-control" type="password" name="password_confirmation" autocomplete="new-password" name="password" placeholder="kosongkan jika password tidak diubah">
            </div>
            <div class="form-group">
              <button class="btn btn-success" type="submit">Simpan Perubahan</button>
            </div>
          </form>
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