<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> คุณคือใคร</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Chonburi&display=swap" rel="stylesheet">
  <style>
        body {
            font-family: 'Chonburi', cursive;
        }
    </style>



</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-success">
    <div class="card-header text-center">
      <a href="register.php" class="h1"><b>คุณคือใคร?</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ใส่ชื่อของคุณ</p>

      <form action="index3.html" method="post">
        <div class="input-group mb-3 ">
          <input type="email" class="form-control " placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class=" fas fa-address-card text-success"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock text-success"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-7">
            <div class="icheck-success">
              <input type="checkbox" id="remember">
              <label for="remember">
                "เดี๋ยวลืม"
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-success btn-block">  ไปกันเถอะ  </button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-secondary">
          <i class="fab fa-facebook mr-2"></i> เข้าสู่ระบบด้วย Facebook
        </a>
        <a href="#" class="btn btn-block btn-success">
          <i class="fab fa-google-plus mr-2"></i> เข้าสู่ระบบด้วย Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html" class="text-success">เป็นคนขี้ลืม</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center text-success" >ต้องการเป็นสมาชิก</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
