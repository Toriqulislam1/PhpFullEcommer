<?php
require'db.php';

$name = $_POST['name'];

$email = $_POST['email'];
$phone = $_POST['phone'];
$guest = $_POST['guest'];

$date = $_POST['date'];

$time = $_POST['time'];

$message = $_POST['message'];

$insert = "INSERT INTO reservation (name,email,phone,guest,alldate,alltime,message)
 values ('$name','$email','$phone','$guest','$date','$time ','$message')";

 $result = mysqli_query($db_connection,$insert)





?>