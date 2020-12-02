@extends('layouts.adminlte')

@section('title','Kategori')

@section('nama_halaman','Kategori')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  
<div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">
         <i class="fas fa-edit"></i>
      Tambah Lowongan Kerja
    </h3>
      </div>
      <div class="card-body">
        <form id="formpost" name="formpost" class="form-group" method="POST" action="{{route('lowongan-kerja.store')}}">
          @csrf
        <input type="hidden" name="post_id" id="post_id" value="">
        <div class="form-group">
          <label for="title">Judul Lowongan Kerja</label>
          <input required class="form-control @error('title') is-invalid @enderror" name="title" id="title" type="text">
          @error('title')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
          <label>Kategori Lowongan Kerja</label>
          <select required class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" id="kategori_id">
            <option value="">Pilih Kategori</option>
            @foreach($Kategori as $k)
            <option value="{{$k->id}}">{{$k->name}}</option>
            @endforeach
          </select>
          @error('kategori_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row">
          <div class="col">
              <div class="form-group">
                <label for="sbg">Posisi Pekerjaan</label>
                <input required class="form-control @error('sbg') is-invalid @enderror" name="sbg" id="sbg" type="text">
                @error('sbg')
                <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
          </div>
          <div class="col">
              <div class="form-group">
              <label for="kuota">Karyawan yang dibutuhkan</label>
              <input required class="form-control @error('kuota') is-invalid @enderror" name="kuota" id="kuota" type="number">
              @error('kuota')
              <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
              </span>
              @enderror
              </div>
          </div>
        </div>
        <div class="form-group">
          <label for="lokasi">Lokasi Kerja</label>
          <input required class="form-control @error('lokasi') is-invalid @enderror" name="lokasi" id="lokasi" type="text">
          @error('lokasi')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="form-group">
        <label>Minimal Kelulusan</label>
          <select required class="form-control @error('kualifikasi') is-invalid @enderror" name="kualifikasi" id="kualifikasi">
            <option value="">Pilih Kualifikasi</option>
            @foreach(kualifikasi() as $r)
              <option value="{{$r->name}}">{{$r->name}}</option>
            @endforeach
          </select>
          @error('kualifikasi')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="min_gajimin_gaji">Gaji Minimal</label>
              <input required id="input-rupiah" class="form-control @error('min_gaji') is-invalid @enderror" name="min_gaji" id="min_gaji" type="number">
              @error('min_gaji')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
          </div>
            <div class="col">
              <div class="form-group">
                <label for="max_gaji">Gaji Maksimal</label>
                <input required id="input-rupiah" class="form-control @error('max_gaji') is-invalid @enderror" name="max_gaji" id="max_gaji" type="number">
                @error('max_gaji')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="deskripsi">deskripsi Lowongan Kerja</label>
          <textarea required class="@error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi"></textarea>
          @error('deskripsi')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
      </div>
      <div class="card-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Tambahkan</button>
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

<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">
    var deskripsi = document.getElementById("deskripsi");
        CKEDITOR.replace(deskripsi,{
        language:'id'
      });
      CKEDITOR.config.allowedContent = true;


var input = document.getElementById('input-rupiah');
input.addEventListener('keyup', function(e)
{
  var   number_string = bilangan.replace(/[^,\d]/g, '').toString(),
    split = number_string.split(','),
    sisa  = split[0].length % 3,
    rupiah  = split[0].substr(0, sisa),
    ribuan  = split[0].substr(sisa).match(/\d{1,3}/gi);
    
  if (ribuan) {
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }
  
  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
});

</script>

@endsection