@extends('layouts.adminlte')

@section('title','Dashboard')
<script type="text/javascript" src="{{asset('Chartjs/dist/Chart.js')}}"></script>

@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-6 col-md-3">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{$user}}</h3>

          <p>User Terdaftar</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6 col-md-3">
      <!-- small box -->
      <div class="small-box bg-gradient-danger">
        <div class="inner">
          <h3>{{$company}}</h3>

          <p>Perusahaan Terdaftar</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @role('super_admin')
    <div class="col-lg-3 col-6 col-md-3">
      <!-- small box -->
      <div class="small-box bg-gradient-danger">
        <div class="inner">
          <h3>{{$admin}}</h3>

          <p>Admin Terdaftar</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    @endrole
    <div class="col-lg-3 col-6 col-md-3">
      <!-- small box -->
      <div class="small-box bg-gradient-warning">
        <div class="inner">
          <h3>{{$loker}}</h3>

          <p>Lowongan Kerja aktif</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6 col-md-3">
      <!-- small box -->
      <div class="small-box bg-gradient-success">
        <div class="inner">
          <h3>{{$loker}}</h3>

          <p>LOREM IPSUM</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    
    
  </div>
  <!-- /.row -->
  
<div class="row">
		<div class="col-md-7">
		<div style="width: 100%; border-left: 4px solid #28a745; box-shadow: 0 0 5px rgba(0,0,0,0.5)" class="bg-white p-4">
			<canvas id="myChart"></canvas>
		</div>
		<br><br>
		</div>
    	<div class="col-md-5">
      		<div style="width: 100%; border-left: 4px solid #dc3545; box-shadow: 0 0 5px rgba(0,0,0,0.5)" class="bg-white p-4">
        		<canvas id="myChart2"></canvas>
     		</div>
    	</div>
  	</div>

    

</div><!-- /.container-fluid -->
</section>

<!-- /.content -->

@endsection



@section('js')


    <script type="text/javascript">



  // SWAL DI KANAN ATAS
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

$('.kosong').click(function() {
      Toast.fire({
    icon: 'warning',
    title: 'Status Postingan masih dalam Peninjauan Admin'
  });
});


$('.delete').click(function()
{
  var title = $(this).attr('title');
  var text = $(this).attr('text');

  Swal.fire({
  title: title,
  text:text,
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    $('.form-delete').submit();
  }
});
});




var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Juli", "Agustus", "September", "Oktober", "November", "Desember"],
				datasets: [{
					label: "Data user baru",
					data: [20, 15, 12, 33, 25, 30],
					backgroundColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

    var ctx2 = document.getElementById("myChart2").getContext('2d');
		var myChart = new Chart(ctx2, {
			type: 'doughnut',
			data: {
				labels: ["User", "Perusahaan", "Admin"],
				datasets: [{
					label: 'User bertambah ',
					data: [20, 15, 1],
					backgroundColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

</script>  


@endsection