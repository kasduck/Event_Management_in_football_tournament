    <?php

include('DBConnect.php');

$clno=$_POST['clid'];
$cname=$_POST['txtname'];
$nationality=$_POST['txtnationality'];
$tid=$_POST['cmbBookName'];
$filename="pic/".$_FILES['file']['name'];




$sql="INSERT INTO coach(clicenceno,name,nationality,teamid,picc)VALUES('$clno','$cname','$nationality','$tid','$filename')";

//echo $sql;
mysql_query($sql);
move_uploaded_file($_FILES['file']['tmp_name'],$filename);


?>
<script language="javascript">
	window.location="coach.php?k=Data Successfully Inserted";
	</script>