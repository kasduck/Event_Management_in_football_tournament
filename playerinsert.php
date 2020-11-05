    <?php

include('DBConnect.php');

$pid=$_POST['txtpid'];
$plno=$_POST['txtplno'];
$name=$_POST['txtname'];
$nn=$_POST['txtnationality'];
$csdate=$_POST['dtdate1'];
$cedate=$_POST['dtdate'];
$pbirth=$_POST['txtpbirth'];
$dob=$_POST['dtdate2'];
$tid=$_POST['cmbBookName'];
$filename="pic/".$_FILES['file']['name'];




$sql="INSERT INTO players(pid,plicenceno,nationality,contractstatedate,contractenddate,placeofbirth,dateofbirth,name,teamid,picc)VALUES('$pid','$plno','$name','$nn','$csdate','$cedate','$pbirth','$dob','$tid','$filename')";

//echo $sql;
mysql_query($sql);
move_uploaded_file($_FILES['file']['tmp_name'],$filename);


?>
<script language="javascript">
	window.location="players.php?k=Data Successfully Inserted";
	</script>