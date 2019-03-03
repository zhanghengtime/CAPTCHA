<?php
    session_start();
    if(@$_POST["submit"]!="")
   {
	$check=@$_POST["check"];
	if(@$check=="")
	{
		echo "<script> alert('验证码不能为空'); window.location.href='deng.php';</script>";
	}
	if(@$check==$_SESSION["vcode"])
	{
		echo "<script>
function check(form)
{
	if(form.user.value==" ")
	{
		alert('请输入用户名');
		form.user.focus();
		return false;
	}
	if(form.pwd.value==" ")
	{
		alert('请输入密码');
		form.pwd.focus();
		return false;
	}
	form.submit();
}";
	}
	else
	{
		echo "<script> alert('您输入的验证码不正确!');window.location.href='deng.php';</script>";
	}
   }
   ?>