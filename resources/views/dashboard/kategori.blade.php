@extends('layouts.adminlte')

@section('title','Kategori')

@section('nama_halaman','Kategori')


@section('content')

<!-- Main content -->
<section class="content">
<div class="container-fluid">
  
<div class="card mb-3 card-primary card-outline">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-edit"></i> Data Kategori</h3>
      </div>
      <div class="card-body">
        <a class="btn btn-sm btn-success mb-3" href="javascript:void(0)" id="tambahkategori"> Tambahkan Kategori</a>
        <table class="table table-bordered table-hover table-sm data-table table-striped">
          <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
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
                        <label for="name" class="col-sm-4 control-label">Nama Kategori</label>
                          <div class="row col-sm-12 mb-3">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Kategori" value="" maxlength="50" autofocus="on">
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
            '<div class="row col-sm-12 mb-3" id="row'+i+'"><div class="col-sm-10"><input type="text" class="form-control" id="DataTables;" name="name" placeholder="Enter Kategori" value="" maxlength="50"></div><div class="col-sm-2"><span class="btn btn-sm btn-danger remove" id="'+i+'"><i class="fas fa-minus-square"></i></span></div></div>');
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
        ajax: "{{ route('kategori.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
    $('#tambahkategori').click(function () {
        $('#saveBtn').val("buat kategori");
        $('#id').val('');
        $('#kategoriform').trigger("reset");
        $('#modelHeading').html("Create New Kategori");
        $('#ajaxModel').modal('show');
    });
    $('body').on('click', '.editBook', function () {
      var id = $(this).data('id');
      $.get("{{ route('kategori.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit kategori");
          $('#saveBtn').val("Edit Kategori");
          $('#ajaxModel').modal('show');
          $('#id').val(data.id);
          $('#name').val(data.name);
      })
   });
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Save');
    
        $.ajax({
          data: $('#kategoriform').serialize(),
          url: "{{ route('kategori.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
     
              $('#kategoriform').trigger("reset");
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
            url: "{{ route('kategori.store') }}"+'/'+id,
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