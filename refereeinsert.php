    <?php

include('DBConnect.php');

$rlno=$_POST['txtrlno'];
$name=$_POST['txtname'];
$city=$_POST['txtcity'];
$filename="pic/".$_FILES['file']['name'];




$sql="INSERT INTO referee(rlicenceno,city,name,picc)VALUES('$rlno','$name','$city','$filename')";

//echo $sql;
mysql_query($sql);
move_uploaded_file($_FILES['file']['tmp_name'],$filename);


?>
<script language="javascript">
	window.location="referee.php?k=Data Successfully Inserted";
	</script>