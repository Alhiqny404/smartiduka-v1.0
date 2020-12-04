@extends('layouts.adminlte')

@section('title','Management Pelamar')

@section('nama_halaman','')

<style>
  .container-fluid{
    border-left: 5px solid #007bff;
    padding: 0 !important;
  }
  table.table{
    border-left: 2px solid #007bff;
  }
  tr.text-center{
    border-top: none !important;
  } 
  table.success{
    border-left: 2px solid #28a745;
  }
  table.warning{
    border-left: 2px solid #ffc107;
  }
</style>



@section('content')


@php
 $pasfoto = Storage::url('pasfoto/'.$lampiran->pasfoto);
 $ktp = Storage::url('ktp/'.$lampiran->ktp);
 $ijazah = Storage::url('ijazah/'.$lampiran->ijazah);
 $skck = Storage::url('skck/'.$lampiran->skck);
 $skd = Storage::url('skd/'.$lampiran->skd);
 $cv = Storage::url('cv/'.$lampiran->cv);


@endphp



<!-- Main content -->
<div class="container">
<section class="content">
<div class="container-fluid">
  


<div class="invoice p-4 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-md">
                <div class="row">
              <div class="col-12 mb-3">
                  <h4>
                    <i class="fas fa-globe"></i>  Detail Pelamar
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
              <div class="col invoice-col">
                  <address class="text-center">
                    <img src="{{url($pasfoto)}}" width="200px" class="m-auto">
                </div>

                
                <!-- /.col -->
              </div>
                </div>
                <div class="col-md">
                <table class="table table-striped my-4">
                    <tbody>
                    	<tr>
                    		<td>Pas Foto</td>
                    		<td><a href="{{$pasfoto}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    	</tr>
                    <tr>
                      <td>KTP</td>
                      <td><a href="{{$ktp}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                      <td>Surat Keterangan Catatan Kepolisian</td>
                      <td><a href="{{$skck}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                      <td>Surat Keterangan Dokter</td>
                      <td><a href="{{$skd}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                      <td>Ijazah Terakhir</td>
                      <td><a href="{{$ijazah}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td>CV</td>
                        <td><a href="{{$cv}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.row -->
              
              <!-- Table row -->
              
                  
              <strong>Data Pribadi</strong><br>
                <div class="row">
                  <div class="col-md-6">
                  <address>
                    <table cellpadding="3" class="table table-striped warning">
                    	<tr>
                    		<td>Nama</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->name}}</td>
                    	</tr>
                    	<tr>
                    		<td>TTGL</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->kota_lahir}}, {{$pelamar->profile->tgl_lahir}}</td>
                    	</tr>
                    	<tr>
                    		<td>Jenis Kelamin</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->jk}}</td>
                    	</tr>
                    	<tr>
                    		<td>Agama</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->agama}}</td>
                    	</tr>
                    	<tr>
                    		<td>Alamat</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->alamat}}</td>
                    	</tr>
                    </table>
                  </address>
                  </div>
                  <div class="col-md-6">
                    <table class="table table-striped success">
                    <tr>
                    		<td>Status Perkawinan</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->status_nikah}}</td>
                    	</tr>
                    	<tr>
                    		<td>No HP</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->no_hp}}</td>
                    	</tr>
                    	<tr>
                    		<td>Email</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->email}}</td>
                    	</tr>
                    	<tr>
                    		<td>website</td>
                    		<td>:</td>
                    		<td>{{$pelamar->profile->website}}</td>
                    	</tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              <!-- /.row -->
<a href="{{url('/management/perlamar')}}" class="btn btn-primary">Kembali</a>

              {{--<!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button> --}}
                </div>
              </div>
            </div>

</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection

