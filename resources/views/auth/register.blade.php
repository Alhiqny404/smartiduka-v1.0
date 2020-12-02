<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('frontend/css/myCSS/register.css')}}" />
      <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{asset('AdminLte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <title>FORM PENDAFTARAN</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="{{route('daftar.user')}}" class="sign-in-form" method="POST">
              @csrf
            <h2 class="title">Daftar - Pencari Kerja</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" class="@error('username') is-invalid @enderror" value="{{ old('username') }}"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" autocomplete="off" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}"/>
            </div>
            <div class="password-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" class="form-password @error('password') is-invalid @enderror" name="password"  />
              <i class="far fa-eye"><input type="checkbox" class="form-checkbox"></i>
            </div>
            <div class="password-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm-Password" class="form-password" name="password_confirmation"  />
              <i class="far fa-eye"><input type="checkbox" class="form-checkbox"></i>
            </div>
            
            <button type="submit" class="btn solid">Registrasi</button>

            <a href="/">Kembali</a>
          </form>



          <form action="{{route('daftar.perusahaan')}}" class="sign-up-form" method="POST">
              @csrf
              <h2 class="title">Daftar - Perusahaan</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" name="username" class="@error('username') is-invalid @enderror" value="{{ old('username') }}"/>
              </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" name="email" class="@error('email') is-invalid @enderror"  value="{{ old('email') }}"/>
              </div>
              <div class="password-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" class="form-password @error('password') is-invalid @enderror" name="password" />
                <i class="far fa-eye"><input type="checkbox" class="form-checkbox"></i>
              </div>
              <div class="password-field">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Confirm-Password" class="form-password" name="password_confirmation" />
                <i class="far fa-eye"><input type="checkbox" class="form-checkbox"></i>
              </div>
            <button type="submit" class="btn">registrasi</button>

            <a href="/">Kembali</a>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>From User</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              for company?
            </button>
          </div>
          <!-- <img src="../img/vektor/businessman-with-laptop.png" class="image" alt="" /> -->
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Registrasion For Companies</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              For User
            </button>
          </div>
          <!-- <img src="img/register.svg" class="image" alt="" /> -->
        </div>
      </div>
    </div>

    <script src="{{asset('frontend/js/myJS/app.js')}}"></script>

    <!-- SweetAlert2 -->
<script src="{{asset('AdminLte/plugins/sweetalert2/sweetalert2.min.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $(document).ready(function(){     
        $('.form-checkbox').click(function(){
          if($(this).is(':checked')){
            $('.form-password').attr('type','text');
          }else{
            $('.form-password').attr('type','password');
          }
        });
      });
    </script>
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

@error('username')
Toast.fire({
    icon: 'warning',
    title: '{{ $message }}'
  });
@enderror
@error('email')
Toast.fire({
    icon: 'warning',
    title: '{{ $message }}'
  });
@enderror
@error('password')
Toast.fire({
    icon: 'warning',
    title: '{{ $message }}'
  });
@enderror



</script>

  </body>
</html>





