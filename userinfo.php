<?php
   $con = mysqli_connect('localhost','root');
   if($con){
   	echo "connection Successful";
   }else{
   	echo "connection failed";
   }

mysqli_select_db($con, 'wildlife_userdata');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comments'];

$query = "insert into userinfo (user,email,mobile,comment) values ('$user', '$email', '$mobile', '$comment')";

mysqli_query($con,$query);

header('location:index.php');
?>
