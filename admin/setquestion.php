<?php
 session_start();
 if($_SESSION['admin']!="mathsadd2022"){
  header("location: index.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ATTEND 1.0</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ATTEND</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      <?php
      if(isset($_SESSION['err'])){
          echo'<h3 class="login-box-msg" style="color:red;">'.$_SESSION['err'].' </h3><br>';
            unset($_SESSION['err']);
        }
      ?>
    <h3 class="login-box-msg">What is today's topic</h3>

    <form action="../php/process.php" method="post">
      <div class="form-group has-feedback">
        <select class="form-control" name="reg_subject" required="required">
          <option >SELECT SUBJECT</option>
          <option value="FSC 111">FSC 111</option>
          <option value="FSC 112">FSC 112</option>
          <option value="FSC 113">FSC 113</option>
          <option value="FSC 114">FSC 114</option>
          <option value="FSC 115">FSC 115</option>
        </select>
      </div>

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Answer" name="bypass_answer" required="required">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat"  name="set_question">Set Question</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
