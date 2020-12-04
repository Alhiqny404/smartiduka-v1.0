@extends('layouts.adminlte')

@section('title','Loker Sudah Ditinjau')

@section('nama_halaman','management Loker')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">


<div class="card card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title">Lowongan kerja Telah Ditinjau</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-sm data-table table-striped">
         <thead class="table-primary">
        <tr>
          <th>No</th>
          <th>Perusahaan</th>
          <th>Judul Lowongan Kerja</th>
          <th>Kategori</th>
          <th>Tanggal Upload</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
        </table>
      </div>
    </div>





<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                <form id="kategoriform" name="kategoriform" class="form-horizontal">
                   <input type="hidden" name="id" id="id">
                    <div class="form-group"  id="dynamic_field">
                        <label for="title" class="col-sm-4 control-label">Nama Kategori</label>
                          <div class="row col-sm-12 mb-3">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter Kategori" value="" maxlength="50">
                              </div>
                              <div class="col-sm-2">
                                <span class="btn btn-sm btn-primary" id="add">
                                  <i class="fas fa-plus"></i>
                                </span>
                            </div>
                          </div>


                          
                    </div>
      
                    <div class="col-sm-offset-2 col-sm-10">
                     <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Simpan Perubahan
                     </button>
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

<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: "{{url('dashboard/management/loker/sudah-ditinjau') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'company_name', name: 'company_name'},
            {data: 'title', name: 'title'},
            {data: 'kategori', name: 'kategori'},
            {data: 'waktu', name: 'waktu'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('body').on('click', '.editBook', function () {
        var id = $(this).data('id');
        $.get("{{url('dashboard/management/loker/sudah-ditinjau') }}" +'/' + id +'/edit', function (data) {
            $('#modelHeading').html("Edit Book");
            $('#saveBtn').val("edit-book");
            $('#ajaxModel').modal('show');
            $('#id').val(data.id);
            $('#title').val(data.title);
        })
     });
  });
</script>
      


@endsection