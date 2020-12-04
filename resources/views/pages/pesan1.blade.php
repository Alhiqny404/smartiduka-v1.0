
@extends('layouts.adminlte')

@section('title','Pesan')
@section('css')
<link rel="stylesheet" href="{{asset('frontend/css/myCSS/tinjau.css')}}">
@endsection
@section('content')

<section class="kosong content">
      <div class="kosong row">
        <div class="kosong col-md-3">
          <a href="compose.html" class="kosong btn btn-primary btn-block mb-3">Compose</a>

          <div class="kosong card">
            <div class="kosong card-header">
              <h3 class="kosong card-title">Folders</h3>

              <div class="kosong card-tools">
                <button type="button" class="kosong btn btn-tool" data-card-widget="collapse">
                  <i class="kosong fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="kosong card-body p-0">
              <ul class="kosong nav nav-pills flex-column">
                <li class="kosong nav-item active">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong fas fa-inbox"></i> Inbox
                    <span class="kosong badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong far fa-envelope"></i> Sent
                  </a>
                </li>
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong far fa-file-alt"></i> Drafts
                  </a>
                </li>
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong fas fa-filter"></i> Junk
                    <span class="kosong badge bg-warning float-right">65</span>
                  </a>
                </li>
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong far fa-trash-alt"></i> Trash
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="kosong card">
            <div class="kosong card-header">
              <h3 class="kosong card-title">Labels</h3>

              <div class="kosong card-tools">
                <button type="button" class="kosong btn btn-tool" data-card-widget="collapse">
                  <i class="kosong fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="kosong card-body p-0">
              <ul class="kosong nav nav-pills flex-column">
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong far fa-circle text-danger"></i>
                    Important
                  </a>
                </li>
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong far fa-circle text-warning"></i> Promotions
                  </a>
                </li>
                <li class="kosong nav-item">
                  <a href="#" class="kosong nav-link">
                    <i class="kosong far fa-circle text-primary"></i>
                    Social
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="kosong col-md-9">
          <div class="kosong card card-primary card-outline">
            <div class="kosong card-header">
              <h3 class="kosong card-title">Inbox</h3>

              <div class="kosong card-tools">
                <div class="kosong input-group input-group-sm">
                  <input type="text" class="kosong form-control" placeholder="Search Mail">
                  <div class="kosong input-group-append">
                    <div class="kosong btn btn-primary">
                      <i class="kosong fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="kosong card-body p-0">
              <div class="kosong mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="kosong btn btn-default btn-sm checkbox-toggle"><i class="kosong far fa-square"></i>
                </button>
                <div class="kosong btn-group">
                  <button type="button" class="kosong btn btn-default btn-sm">
                    <i class="kosong far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="kosong btn btn-default btn-sm">
                    <i class="kosong fas fa-reply"></i>
                  </button>
                  <button type="button" class="kosong btn btn-default btn-sm">
                    <i class="kosong fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="kosong btn btn-default btn-sm">
                  <i class="kosong fas fa-sync-alt"></i>
                </button>
                <div class="kosong float-right">
                  1-50/200
                  <div class="kosong btn-group">
                    <button type="button" class="kosong btn btn-default btn-sm">
                      <i class="kosong fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="kosong btn btn-default btn-sm">
                      <i class="kosong fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
              <div class="kosong table-responsive mailbox-messages">
                <table class="kosong table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check1">
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"></td>
                    <td class="kosong mailbox-date">5 mins ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check2">
                        <label for="check2"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">28 mins ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check3">
                        <label for="check3"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">11 hours ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check4">
                        <label for="check4"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"></td>
                    <td class="kosong mailbox-date">15 hours ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check5">
                        <label for="check5"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">Yesterday</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check6">
                        <label for="check6"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check7">
                        <label for="check7"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check8">
                        <label for="check8"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"></td>
                    <td class="kosong mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check9">
                        <label for="check9"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"></td>
                    <td class="kosong mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check10">
                        <label for="check10"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"></td>
                    <td class="kosong mailbox-date">2 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check11">
                        <label for="check11"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">4 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check12">
                        <label for="check12"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"></td>
                    <td class="kosong mailbox-date">12 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check13">
                        <label for="check13"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star-o text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">12 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check14">
                        <label for="check14"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">14 days ago</td>
                  </tr>
                  <tr>
                    <td>
                      <div class="kosong icheck-primary">
                        <input type="checkbox" value="" id="check15">
                        <label for="check15"></label>
                      </div>
                    </td>
                    <td class="kosong mailbox-star"><a href="#"><i class="kosong fas fa-star text-warning"></i></a></td>
                    <td class="kosong mailbox-name"><a href="#">Fulan</a></td>
                    <td class="kosong mailbox-subject"><b>Smart Iduka</b> - Trying to find a solution to this problem...
                    </td>
                    <td class="kosong mailbox-attachment"><i class="kosong fas fa-paperclip"></i></td>
                    <td class="kosong mailbox-date">15 days ago</td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="kosong card-footer p-0">
              <div class="kosong mailbox-controls">
                <!-- Check all button -->
                <button type="button" class="kosong btn btn-default btn-sm checkbox-toggle">
                  <i class="kosong far fa-square"></i>
                </button>
                <div class="kosong btn-group">
                  <button type="button" class="kosong btn btn-default btn-sm">
                    <i class="kosong far fa-trash-alt"></i>
                  </button>
                  <button type="button" class="kosong btn btn-default btn-sm">
                    <i class="kosong fas fa-reply"></i>
                  </button>
                  <button type="button" class="kosong btn btn-default btn-sm">
                    <i class="kosong fas fa-share"></i>
                  </button>
                </div>
                <!-- /.btn-group -->
                <button type="button" class="kosong btn btn-default btn-sm">
                  <i class="kosong fas fa-sync-alt"></i>
                </button>
                <div class="kosong float-right">
                  1-50/200
                  <div class="kosong btn-group">
                    <button type="button" class="kosong btn btn-default btn-sm">
                      <i class="kosong fas fa-chevron-left"></i>
                    </button>
                    <button type="button" class="kosong btn btn-default btn-sm">
                      <i class="kosong fas fa-chevron-right"></i>
                    </button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

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

$('.kosong').click(function() {
      Toast.fire({
    icon: 'warning',
    title: 'Fitur Masih Dalam Pengembangan'
  });
});
</script>


@endsection