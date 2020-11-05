    <?php

include('DBConnect.php');

$uid=$_POST['txtuname'];
$mob=$_POST['txtmobile'];
$email=$_POST['txtemail'];
$pass=$_POST['txtpassword'];





$sql="INSERT INTO registration(uid,mob,email,password)VALUES('$uid','$mob','$email','$pass')";
$sql1="INSERT INTO login(loginid,password)VALUES('$email','$pass')";

//echo $sql;
mysql_query($sql);
mysql_query($sql1);



?>
<script language="javascript">
	window.location="uregistration.php?k=Data Successfully Inserted";
	</script>