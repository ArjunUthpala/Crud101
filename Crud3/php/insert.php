<?php
session_start();
include 'connection.php';

if(isset($_POST['submit'])){

    $First_name=$_POST["fname"];
    $Last_name=$_POST["lname"];
    $Email=$_POST["email"];
    $Mobile=$_POST["mob"];

    $check_email = "SELECT * FROM student WHERE Email = '$Email'";
    $check_run = mysqli_query($con, $check_email);

    if(mysqli_num_rows($check_run) > 0) {

        $_SESSION['msg'] = "<div class='alert alert-danger'>
       this emaill is already exists!</div>";
       header('Location: ../index.php?intert=false');
  
    } else 
    
    {
          $sql="INSERT INTO student (First_name, Last_name, Email, Mobile)
            VALUES('$First_name','$Last_name','$Email','$Mobile')";

        
        $result=mysqli_query($con,$sql);
            if($result){
                $_SESSION['msg'] = "<div class='alert alert-success'>
                Data inserted successfully!</div>";
                header('Location: ../index.php?intert=true');
            }
            else{
                
                $_SESSION['msg'] = "<div class='alert alert-danger'>
                Data inserted failed!</div>";
                header('Location: ../index.php?intert=false');
            }
    }
}
?>
