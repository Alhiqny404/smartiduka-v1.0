@extends('layouts.adminlte')

@section('title','management pelamar')

@section('nama_halaman','management pelamar')



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
<section class="content">
<div class="container-fluid">
  

<a href="{{url('/management/perlamar')}}" class="btn btn-primary">Kembali</a>

<div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i>Detail Pelamar
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col invoice-col">
                  <address>
                    <strong>Data Pribadi</strong><br>
                    <table>
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
                  </address>
                </div>
                <!-- /.col -->
                <div class="col invoice-col">
                  <address>
                  	<img src="{{url($pasfoto)}}" width="200px">
                </div>
                
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th colspan="5" class="text-center">LAMPIRAN ONLINE</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<tr>
                    		<td>1</td>
                    		<td>CV</td>
                    		<td><a href="{{$cv}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    	</tr>
                    <tr>
                      <td>2</td>
                      <td>KTP</td>
                      <td><a href="{{$ktp}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Surat Keterangan Catatan Kepolisian</td>
                      <td><a href="{{$skck}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Surat Keterangan Dokter</td>
                      <td><a href="{{$skd}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Ijazah Terakhir</td>
                      <td><a href="{{$ijazah}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->


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

@endsection

