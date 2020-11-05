<?php
include('DBConnect.php');
$name=$_POST['txtuname'];
$pwd=$_POST['txtpass'];
$sql="select * from registration where email='$name' and password='$pwd'";
echo $sql;
$count=mysql_num_rows(mysql_query($sql));

if($count>0)
{
	session_start();
	$_SESSION['UserName']=$name;
	if($name=="admin")
	{
	
	?>
	<script language="javascript">
	window.location="admin.php";
	</script>
	<?php
	}
	else
	{
	?>
	<script language="javascript">
	window.location="user.php";
	</script>
	<?php
	}
}
else 
{
	?>
	<script language="javascript">
//window.location="index.php?k=1";
	</script>
	<?php
}
?>