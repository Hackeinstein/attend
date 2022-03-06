<?php
session_start();
 if($_SESSION['admin']!="mathsadd2022"){
   header("location: index.php");
 }
//set database info
$host="localhost";
$user="root";
$passwd="";
$database="attend";

$db=mysqli_connect($host,$user,$passwd,$database);

if($db){
    $connc="success";
}else{
    $_SESSION['err']="Database Incorrect";
}

//search principles
$reg_subject=$_SESSION['subject'];
$reg_date=$_SESSION['date'];

$query="SELECT * FROM records WHERE reg_subject ='$reg_subject' AND reg_date='$reg_date' ";
$reg_query=mysqli_query($db,$query);

echo $_SESSION['admin'];

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
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css" >
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

  <script>
    function PrintTable() {
        var printWindow = window.open('', '', 'height=200,width=400');
        printWindow.document.write('<html><head><title>Table Contents</title>');
 
  
        printWindow.document.write('<link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css" >');
        printWindow.document.write('<link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">');
        printWindow.document.write('  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">');
        printWindow.document.write('  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">');
        printWindow.document.write('</head>');
 
        //Print the DIV contents i.e. the HTML Table.
        printWindow.document.write('<body>');
        var divContents = document.getElementById("print").innerHTML;
        printWindow.document.write(divContents);
        printWindow.document.write('</body>');
 
        printWindow.document.write('</html>');
        printWindow.document.close();
        printWindow.print();
    }
    </script>


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>ATTEND</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
            
        <div class="box" id="print">
            <div class="box-header">
              <h3 class="box-title"><b>ATTENDANCE RECORDS FOR <?php echo"$reg_subject";?> ON <?php echo"$reg_date";?>  </b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>NAME</th>
                            <th>MATRIC_NO</th>
                            <th >OPTION</th>
                        </tr>
            <?php
                while($row=mysqli_fetch_assoc($reg_query)){
                  
                        echo '<tr>
                            <td>'.$row['student'].'</td>
                             <td>'.$row['matric_no'].'</td>
                             <td>'.$row['reg_option'].'</td>
                          </tr>';
                  
                }
                ?>
            
                    </tbody>
                    
                </table>
                <button class="btn btn-danger" onclick="PrintTable()"><span class="fa fa-print"></span>Print</button>
        </div>
            <!-- /.box-body -->
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
