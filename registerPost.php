<?php 

session_start();

//database connection
$host = "localhost";
$user = "root";
$pass ="";
$dbname="phpfullecommerce";
//end database connection 

//data keeping form
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//using password validation
$after_hash= password_hash($password,PASSWORD_DEFAULT);
$uppercase = preg_match('@[A-Z]@',$password);
$lowercase = preg_match('@[a-z]@',$password);
$number = preg_match('@[0-9]@',$password);
$spicial = preg_match('@[#,$,%,&,*,!,?]@',$password);
// end password using validation
$flag = true;
// name work start
if(empty($name)){

 $_SESSION['nam_err']="Enter your name";
  $flag = false;
// header('location:register.php');
}

//name work end

//email working start
if(empty($email)){

 $_SESSION['eml_err']="Enter your Email";
  $flag = false;
// header('location:register.php');
}else{
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

    $_SESSION['eml_err']="Enter valid Email";
   } 
}

//email work end

//password working start
if(empty($password)){

 $_SESSION['pass_err']="Enter your password";
  $flag = false;
// header('location:register.php');
}else{
    if(!$uppercase ||!$lowercase ||!$number ||!$spicial|| strlen($password <8)){

    $_SESSION['pass_err']="uppercase,lowercase,number,spacial numbe[#,$,%,&,*,!,?] min 8 charecter";
    $flag = false;
        }
}

//password work end


if($flag){
    //database connection in register
    $con = mysqli_connect($host,$user,$pass,$dbname);
    $insert = "INSERT INTO register(name, email, password)VALUES('$name', '$email', '$after_hash')";
    mysqli_query($con,$insert);
    //database connection in register end
}else{
    $_SESSION['nam_val']=$name;
    $_SESSION['eml_val']=$email;
    header('location:register.php');
}

?>