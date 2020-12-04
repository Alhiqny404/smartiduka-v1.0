@extends('layouts.adminlte')

@section('title','Data Penjadwalan Interview')

@section('nama_halaman','Data Penjadwalan Interview')

<style>
	.table1{
		width: 100%; 
	}
</style>



@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
	

<div class="card card-primary card-outline">
              <div class="card-header p-0  border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">
                      <i class="fas fa-stopwatch nav-icon"></i>
                      Belum Interview
                  </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false"><i class="fas fa-calendar nav-icon"></i>
                      Keputusan {{--<span class="badge badge-warning badge-circle">15</span>--}}</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                        <table class="table table-bordered table-hover table-sm">
		<thead class="table-primary">
		<tr>
		<th>No</th>
		<th>Pelamar</th>
		<th>Lowongan Kerja</th>
		<th>Tempat Interview</th>
		<th colspan="2">Jadwal interview</th>
		<th>Status</th>
		<th>opsi</th>
		</tr>
		</thead>
		<tbody>
				@foreach($invwPending as $invp)
				<tr>
				<td>{{$loop->iteration}}</td>
				<td><a href="{{route('detail.perlamar',$invp->pelamar_id)}}" style="color:black;">{{$invp->pelamar->profile->name}}</a></td>
				<td>{{$invp->pelamar->post->title}}</td>
				<td>{{$invp->tempat}}</td>
				<td>{{$invp->waktu}}</td>
				<td>{{$invp->tanggal}}</td>
				@if($invp->status == 'pending')
				<td>Belum Interview</td>
				@endif
				<td>
				<form action="{{route('doneInverview',$invp->id)}}" method="post">
					@csrf
					<button class="btn btn-sm btn-success"><i class="fas fa-check"></i> </button>
				</form>
				</td>
				@endforeach

		</tbody>
		</table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                    <table class="table1 table-bordered table-hover table-sm">
		<thead class="table-primary">
		<tr>
		<th>No</th>
		<th>Pelamar</th>
		<th>Lowongan Kerja</th>
		<th>Tempat Interview</th>
		<th colspan="2">Jadwal interview</th>
		<th>Status</th>
		<th>Keputusan</th>
		</tr>
		</thead>
		<tbody>
				@foreach($invwSuccess as $invs)
				@if($invs->pelamar->status == 'process')
				<tr>
				<td>{{$loop->iteration}}</td>
				<td><a href="{{route('detail.perlamar',$invs->pelamar_id)}}" style="color:black;">{{$invs->pelamar->profile->name}}</a></td>
				<td>{{$invs->pelamar->post->title}}</td>
				<td>{{$invs->tempat}}</td>
				<td>{{$invs->waktu}}</td>
				<td>{{$invs->tanggal}}</td>
				@if($invs->status == 'success')
				<td>Sudah Interview</td>
				@endif
				<td>
					<a class="btn btn-sm btn-success"
                  onclick="event.preventDefault();
               document.getElementById('success').submit();" title="meloloskan pelamar"><i class="fas fa-check"></i></a>
               <a class="btn btn-sm btn-danger"
                  onclick="event.preventDefault();
               document.getElementById('failed').submit();" title="tidak meloloskan pelamar"><i class="fas fa-times"></i></a>
				</td>

				<form id="success" action="{{route('keputusanAkhir',$invs->pelamar_id)}}" method="POST" class="d-none" style="display: none;">
                      @csrf
                      <input type="hidden" name="status" value="success">
                      </form>
                      <form  id="failed" action="{{route('keputusanAkhir',$invs->pelamar_id)}}" method="POST" class="d-none" style="display: none;">
                      @csrf
                      <input type="hidden" name="status" value="failed">
                      </form>
				@endif
				@endforeach
			</tr>
		</tbody>
		</table>
                  </div>
                </div>
              </div>
              <!-- /.card -->
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
<script type="text/javascript">
  $(document).ready(function(){
    $('.table1').DataTable();
  })
</script>
@endsection
