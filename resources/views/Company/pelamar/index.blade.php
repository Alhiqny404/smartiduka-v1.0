@extends('layouts.adminlte')

@section('title','management pelamar')

@section('nama_halaman','management pelamar')



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
                      Belum Diproses 
                      @if(countPelamarPendingInCompany() > 0)
                      <span class="badge badge-warning badge-circle">{{countPelamarPendingInCompany()}}</span>
                    @endif
                  </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">
                    <i class="fas fa-times nav-icon"></i> Gagal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false"><i class="fas fa-check nav-icon"></i> Lolos</a>
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
                        <th>Email</th>
                        <th>nomor hp</th>
                        <th>Tanggal melamar</th>
                        <th>aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pelamar as $plm)
                        <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$plm->profile->name}}</td>
                        <td>{{$plm->post->title}}</td>
                        <td>{{$plm->profile->email}}</td>
                        <td>{{$plm->profile->no_hp}}</td>
                        <td>{{$plm->created_at->isoFormat('D MMMM Y')}}</td>
                        <td>
                        <a href="{{route('detail.perlamar',$plm->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                        <a class="btn btn-sm btn-success" href="{{route('aturInterview.perlamar',$plm->id)}}"><i class="fas fa-check"></i></a>
                        <a class="btn btn-sm btn-danger keputusan" title="Eliminasi Pelamar" text="akan dinyatakan tereliminasi atau gagal?"  nama="{{$plm->profile->name}}"><i class="fas fa-times-circle"></i></a>

                        </td>
                        <form id="success" action="{{route('tinjau.perlamar.post',$plm->id)}}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="status" value="success">
                        </form>
                        <form id="failed" action="{{route('tinjau.perlamar.post',$plm->id)}}" method="POST" class="d-none">
                        @csrf
                        <input type="hidden" name="status" value="failed">
                        </form>
                        @endforeach
                        </tbody>
                        </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                          <table class="table table-gagal table-bordered table-hover table-sm">
                          <thead class="table-primary">
                          <tr>
                          <th>No</th>
                          <th>Pelamar</th>
                          <th>Lowongan Kerja</th>
                          <th>Email</th>
                          <th>nomor hp</th>
                          <th>Tanggal melamar</th>
                          <th>aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($gagal as $fld)
                          <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$fld->profile->name}}</td>
                          <td>{{$fld->post->title}}</td>
                          <td>{{$fld->profile->email}}</td>
                          <td>{{$fld->profile->no_hp}}</td>
                          <td>{{$fld->created_at->isoFormat('D MMMM Y')}}</td>
                          <td>
                          <a href="{{route('detail.perlamar',$fld->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                          @endforeach
                          </tbody>
                          </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                          <table class="table table-lolos table-bordered table-hover table-sm">
                          <thead class="table-primary">
                          <tr>
                          <th>No</th>
                          <th>Pelamar</th>
                          <th>Lowongan Kerja</th>
                          <th>Email</th>
                          <th>nomor hp</th>
                          <th>Tanggal melamar</th>
                          <th>aksi</th>
                          </tr>
                          </thead>
                          <tbody>
                          @foreach($lolos as $lls)
                          <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$lls->profile->name}}</td>
                          <td>{{$lls->post->title}}</td>
                          <td>{{$lls->profile->email}}</td>
                          <td>{{$lls->profile->no_hp}}</td>
                          <td>{{$lls->created_at->isoFormat('D MMMM Y')}}</td>
                          <td>
                          <a href="{{route('detail.perlamar',$lls->id)}}" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>
                          @endforeach
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
  });

  $(document).ready(function(){
    $('.table-lolos').DataTable();
  });


  $(document).ready(function(){
    $('.table-gagal').DataTable();
  })
</script>

<script type="text/javascript">
  
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


$('.keputusan').click(function()
{
  var title = $(this).attr('title');
  var text = $(this).attr('text');
  var url = $(this).attr('url');
  var nama = $(this).attr('nama');

  Swal.fire({
  title: title,
  text:nama + " " + text,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $('#failed').submit();
  }
});
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
    title: 'Anda Belum Melampirkan Berkasnya'
  });
});

</script>
      
@endsection
