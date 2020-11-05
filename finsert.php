    <?php

include('DBConnect.php');

$uid=$_POST['txtuname'];
$mob=$_POST['txtmobile'];
$email=$_POST['txtemail'];
$remarks=$_POST['txtremarks'];





$sql="INSERT INTO feedback(uname,mobile,email,remarks)VALUES('$uid','$mob','$email','$remarks')";

//echo $sql;
mysql_query($sql);




?>
<script language="javascript">
	window.location="feedback.php?k=Data Successfully Inserted";
	</script>