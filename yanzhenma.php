<?php
    session_start();
    if(@$_POST["submit"]!="")
   {
	$check=@$_POST["check"];
	if(@$check=="")
	{
		echo "<script> alert('��֤�벻��Ϊ��'); window.location.href='deng.php';</script>";
	}
	if(@$check==$_SESSION["vcode"])
	{
		echo "<script>
function check(form)
{
	if(form.user.value==" ")
	{
		alert('�������û���');
		form.user.focus();
		return false;
	}
	if(form.pwd.value==" ")
	{
		alert('����������');
		form.pwd.focus();
		return false;
	}
	form.submit();
}";
	}
	else
	{
		echo "<script> alert('���������֤�벻��ȷ!');window.location.href='deng.php';</script>";
	}
   }
   ?>