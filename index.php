<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- meta http-equiv="refresh" content="5" /> -->
    <title>Sistem Informasi Tenaga Ahli</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="dist/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    @import url('https://https://fonts.google.com/specimen/Inter');
* {
    padding: 0px;
    margin: 0px;
    list-style: none;
    quotes: none;
    text-decoration: unset;
    outline: none;
    border: none;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }
  html {
    width: 100%;
    scroll-behavior: smooth;
    font-family: 'Inter', ;
  }
  body {
    height: 100%;
    width: 100%;
    position: relative;
    margin: 0px auto;
    background-color:
    #4A4545;
  }
  h2{
    margin-top: 60px;
    text-align: center;
    color: #FFFFFF;
  }
  h1{
    color: #4A4545;
    text-align: center;
    font-size: 30px;
    margin-top:30px;
    margin-bottom: 15px;
  }
 .mark{
    border-radius: 30px;
  

 }
 .btn-br{
    background-color: #4A4545;
    color: #FBFBFB;
    border-radius: 25px;
    font-size: 24px;
 }
 .input{
    background-color: #D9D9D9;
    height: 35px;
    width: 315px;
    font-size: 24px;
 }
 .a{
    text-decoration: none;
    text-align: left;
 }
 .btn-rg{
    margin-top: 15px;
    font-size: 15px;
 }
 .copy{
  font-size: 16px;
  margin-top: 35px;
 }

 </style>
  <body>
    <div class="login-box">
      <div class="login-logo">
        <a href="#" style="color: white;"><b>SI TENAGA AHLI </b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body mark">
      <h1><b>LOGIN</b></h1>
         <p class="login-box-msg"><?php if (isset($_GET['error'])) {echo 
                  "<div class='alert alert-danger alert-gradient alert-dismissible fade in' role='alert'>
                            <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>x</span></button>
                            <strong>Error!</strong> $_GET[error]
                          </div>";} else { echo "";} ?></p>
        <form action="proseslogin.php" id="login" name="login" method="post">
          <div class="form-group has-feedback">
            <input type="text" id="username" name="username" class="input" autocomplete="off" placeholder="Username" required="required">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" id="password" name="password" class="input" autocomplete="off" placeholder="Password" required="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-br btn-block">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <center><h5 class="form-signin copy"><a href="#" data-toggle="modal" >PT TRISAKTI PILAR PERSADA &copy; 2023</a> </h5></center> 

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    
     <!-- Modal Dialog Contact -->
 
<!-- end dialog modal -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
