<?php
include("includes/header.php");

if(isset($_POST['userName']) && !empty($_POST['userName']) &&
	isset($_POST['password']) && !empty($_POST['password'])
	){
		$userName=$_POST['userName'];
		$password=$_POST['password'];
}
else
	exit("برخی فیلد ها مقدار دهی نشده است");

$link=mysqli_connect("localhost","root","","shop_db");

if(mysqli_connect_errno())
	exit("خطایی با شرح زیر رخ داده شده است: ".mysqli_connect_errno());

$query="SELECT * FROM `users` WHERE `userName`='$userName' AND `password`='$password'";

$result=mysqli_query($link,$query);

$row=mysqli_fetch_array($result);

if($row){
	$_SESSION["state_login"]=true;
	$_SESSION["realName"]=$row["realName"];
	$_SESSION["userName"]=$row["userName"];
	
	if($row["type"] ==0)
		$_SESSION["user_type"]="public";
	
	elseif($row["type"] ==1){
		$_SESSION["user_type"]="admin";
		
	?>
		
		<script type="text/javascript">
		<!-->
		location.replace("admin_products.php");
		-->
		</script>
		
	<?php
	}
	
	//echo("<p style='color:green;'><b>{$row['realName']} به فروشگاه ایرانیان خوش آمدید</b></p>");
}
else
	echo("<p style='color:red;'><b>نام کاربری یا کلمه عبور معتبر نمی باشد</b></p>");

mysqli_close($link);

include("includes/footer.php");
?>