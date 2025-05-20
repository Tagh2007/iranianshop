<?php
include("includes/header.php");

if(isset($_POST['realName']) && !empty($_POST['realName']) &&
	isset($_POST['userName']) && !empty($_POST['userName']) &&
	isset($_POST['password']) && !empty($_POST['password']) &&
	isset($_POST['rePassword']) && !empty($_POST['rePassword']) &&
	isset($_POST['email']) && !empty($_POST['email'])
	){
$realName=$_POST['realName'];
$userName=$_POST['userName'];
$password=$_POST['password'];
$rePassword=$_POST['rePassword'];
$email=$_POST['email'];
}
else
	exit("برخی فیلد ها مقدار دهی نشده است");

if($password !=$rePassword)
	exit("کلمه عبور و تکرار آن مشابه نیست");

if(filter_var($email,FILTER_VALIDATE_EMAIL)===false)
	exit("پست الکترونیک وارد شده صحیح نیست");

$link=mysqli_connect("localhost","root","","shop_db");

if(mysqli_connect_errno())
	exit("خطایی با شرح زیر رخ داده شده است: ".mysqli_connect_errno());

$query="INSERT INTO `users`(`realName`, `userName`, `password`, `email`, `type`) VALUES ('$realName','$userName','$password','$email','0')";

if(mysqli_query($link,$query)===true)
	echo("<p style='color:green;'><b>".$realName.
		"گرامی عضویت شما با نام کاربری ".$userName.
		" در فروشگاه با موفقیت انجام شد"."</b></p>");
else
	echo("<p style='color:red;'><b>عضویت شما در فروشگاه انجام نشد</b></p>");

mysqli_close($link);

include("includes/footer.php");
?>