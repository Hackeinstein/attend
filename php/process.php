<?php
session_start();

//connect to database with code
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

//code to handle all admin shit 
if(isset($_POST['admin'])){
    $admin_user=mysqli_real_escape_string($db,$_POST['admin_user']);
    if($admin_user=="mathsadd2022"){
        $_SESSION['admin']="mathsadd2022";
        header("location: ../admin/search.php");
    }else{
        $_SESSION['err']=  "Wrong user";
        header("location: ../admin/index.php");
    }
    
}


//code to run when  user answers question
if(isset($_POST['bypass'])){
    $bypass_subject=mysqli_real_escape_string($db,$_POST['bypass_subject']);
    $bypass_answer= strtoupper(mysqli_real_escape_string($db,$_POST['bypass_answer']));
    $_SESSION['bypass_subject']=$bypass_subject;
    
    $b_query="SELECT * FROM bypass WHERE reg_subject = '$bypass_subject' ";
    $b_search=mysqli_query($db,$b_query);
    if($b_search){
        $b_row=mysqli_fetch_assoc($b_search);

        if($b_row['bypass_answer']==$bypass_answer){
            header("location: ../student/attend.php");
            $_SESSION['student']="active";
        }else{
            $_SESSION['err']="Wrong Answer You didn't Attend Class";
            header('location: ../student/index.php');
        }
    }else{
        $_SESSION['err']="bypass query not working";
    }
}

//code to run when
if(isset($_POST['mark_attend'])){
    $student=strtoupper(mysqli_real_escape_string($db,$_POST['fullname']));
    $matric_no=mysqli_real_escape_string($db,$_POST['matric_no']);
    $option=mysqli_real_escape_string($db,$_POST['option']);
    $reg_subject=$_SESSION['bypass_subject'];
    $reg_date=date("Y-m-d");

    
    $query="INSERT INTO records (student,matric_no,reg_subject,reg_date,reg_option) VALUES ('$student','$matric_no','$reg_subject','$reg_date','$option')";

    if(mysqli_query($db,$query)){
        header("location: ../student/success.html");
    }

}

if(isset($_POST['search'])){
    $_SESSION['subject']=mysqli_real_escape_string($db,$_POST['reg_subject']);
    $_SESSION['date']=mysqli_real_escape_string($db,$_POST['reg_date']);
    header("location: ../admin/view.php");
}

if(isset($_POST['set_question'])){
    $reg_subject=mysqli_real_escape_string($db,$_POST['reg_subject']);
    $bypass_answer=mysqli_real_escape_string($db,$_POST['bypass_answer']);   

    $query="UPDATE bypass SET bypass_answer ='$bypass_answer' WHERE reg_subject='$reg_subject'";
    if(mysqli_query($db,$query)){
        header("location: ../admin/success.html");
    }else{
        $_SESSION['err']="unable to set Answer";
        header("location: ../admin/setquestion.php");
    }
}
?>

