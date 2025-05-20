<?php
include("includes/header.php");

if(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true){
?>
<script type="text/javascript">
<!--
location.replace("message.php");
-->
</script>
<?php
}
?>
<script type="text/javascript">
<!--
	function check_empty()
	{
		var userName="";
		userName=document.getElementById("userName").value;
		if(userName=="")
			alert("وارد کردن نام کاربری الزامی است");
		else
		{
			var result=confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
			if(result==true)
			{
				document.register.submit();
			}
		}
	}
-->
</script>

<br/>
<form name="register" action="action_register.php" method="POST">
	<table style="width:50%;" border="0" style="margin-left:auto;margin-right:auto;">
		<tr>
			<td style="width:40%;">نام واقعی<span style="color:red;">*</span></td>
			<td style="width:40%;"><input type="text" id="realName" name="realName"></td>
		</tr>
		
		<tr>
			<td>نام کاربری<span style="color:red;">*</span></td>
			<td><input type="text" style="text-align:left;" id="userName" name="userName"></td>
		</tr>
		
		<tr>
			<td>کلمه عبور<span style="color:red;">*</span></td>
			<td><input type="password" style="text-align:left;" id="password" name="password"></td>
		</tr>
		
		<tr>
			<td>تکرار کلمه عبور<span style="color:red;">*</span></td>
			<td><input type="password" style="text-align:left;" id="rePassword" name="rePassword"></td>
		</tr>
		
		<tr>
			<td>پست الکترونیک<span style="color:red;">*</span></td>
			<td><input type="text" style="text-align:left;" id="email" name="email"></td>
		</tr>
		
		<tr>
			<td><br/><br/></td>
			<td><input type="button" value="ثبت نام" onclick="check_empty()"/>
			&nbsp;&nbsp;&nbsp;
			<input type="reset" value="جدید"/></td>
		</tr>
	</table>
</form>
<?php
include("includes/footer.php");
?>