<?php
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "phpfullecommerce";
     
     // Create connection
     $con = new mysqli($servername, $username, $password, $dbname);

$password= $_POST['password'];
$after_hash = password_hash($password,PASSWORD_DEFAULT);

$email= $_POST['email'];

$select = "SELECT COUNT(*) as exits FROM register where email = '$email'";
 $result = mysqli_query($con,$select);
  
 $after_assoc = mysqli_fetch_assoc($result);
 


    if($after_assoc['exits']==1){

        $user_pass = "SELECT * FROM `register` WHERE email = '$email'";
        $user_pass_res = mysqli_query($con,$user_pass);
        $after_pass_assoc = mysqli_fetch_assoc($user_pass_res);
         if(password_verify($password, $after_pass_assoc['password'])){
          
            
            if($after_pass_assoc['usertype']==1){

                header('location:deshboard.php');

            }else{
                header('location:user/user.php');
            }

            

         }else{
           
            header('location:login.php');
         }

    }else{
        echo "email does not exits";
    }





?>