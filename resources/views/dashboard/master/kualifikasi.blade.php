@extends('layouts.adminlte')

@section('title','kualifikasi')

@section('nama_halaman','kualifikasi')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  


   

<div class="card mb-3 card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> Data kualifikasi</h3>
      </div>
      <div class="card-body">
        <a class="btn btn-sm btn-success mb-3" href="javascript:void(0)" id="createNewBook"> Tambahkan kualifikasi</a>
        <table class="table table-bordered table-hover table-sm data-table table-striped">
          <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama kualifikasi</th>
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
                <form id="kualifikasiform" name="kualifikasiform" class="form-horizontal">
                   <input type="hidden" name="id" id="id">
                    <div class="form-group"  id="dynamic_field">
                        <label for="name" class="col-sm-4 control-label">Nama kualifikasi</label>
                          <div class="row col-sm-12 mb-3">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter kualifikasi" value="" maxlength="50" autofocus="on">
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
      $(document).ready(function(){
        var i = 1;
        $('#add').click(function(){
          $('#dynamic_field').append(
            '<div class="row col-sm-12 mb-3" id="row'+i+'"><div class="col-sm-10"><input type="text" class="form-control" id="DataTables;" name="name" placeholder="Enter kualifikasi" value="" maxlength="50"></div><div class="col-sm-2"><span class="btn btn-sm btn-danger remove" id="'+i+'"><i class="fas fa-minus-square"></i></span></div></div>');
        });
        $(document).on('click','.remove',function(){
          var button_id = $(this).attr("id");
          $('#row'+button_id+'').remove();
        })
      });
    </script>
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
        ajax: "{{ route('kualifikasi.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#createNewBook').click(function () {
        $('#saveBtn').val("buat kualifikasi");
        $('#id').val('');
        $('#kualifikasiform').trigger("reset");
        $('#modelHeading').html("Create New kualifikasi");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editBook', function () {
      var id = $(this).data('id');
      $.get("{{ route('kualifikasi.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit Book");
          $('#saveBtn').val("edit-book");
          $('#ajaxModel').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#kualifikasiform').serialize(),
          url: "{{ route('kualifikasi.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#kualifikasiform').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
         
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
    
    $('body').on('click', '.deleteBook', function () {
     
        var id = $(this).data("id");
               Swal.fire({
  title: "data akan dihapus",
  text:"apakah anda yakin akan menghapusnya?",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
     $.ajax({
            type: "DELETE",
            url: "{{ route('kualifikasi.store') }}"+'/'+id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
  }
});
      
        
    });
     
  });
</script>

@endsection