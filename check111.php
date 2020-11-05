<?php
include('DBConnect.php');
$uname=$_POST['txtuid'];
$pwd=$_POST['txtpwd'];
$sql="select * from login where loginid='$uname' and password='$pwd'";
$row=mysql_fetch_array(mysql_query($sql));
$count=mysql_num_rows(mysql_query($sql));

if($count>0)
{
session_start();
$_SESSION['UserName']=$uname;
	if($row[0]=="admin")
	{
	//header('Location: Admin.php');
	?>
	<script>
	window.location="admin.php";
	</script>
	<?php
	}
	if($row[0]=="user")
	{
	//header('Location: Faculty.php');
	?>
	<script>
	window.location="user.php";
	</script>
	<?php
	}
	if($row[0]=="student")
	{
	//header('Location: student.php');
	?>
	<script>
	window.location="student.php";
	</script>
	<?php
	}
}
else
{
//header('Location: index.php?s=Invalide User Name and Password');
?>
	<script>
	window.location="index.php?s=Invalide User Name and Password";
	</script>
	<?php
}
?>