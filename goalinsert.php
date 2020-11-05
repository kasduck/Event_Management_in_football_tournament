    <?php

include('DBConnect.php');

$gid=$_POST['txtgid'];
$gameid=$_POST['cmbBookName'];
$teamid=$_POST['cmbBookName1'];
$pid=$_POST['cmbBookName2'];
$minute=$_POST['txtminute'];
$half=$_POST['txthalf'];
$gtype=$_POST['txtgtype'];




$sql="INSERT INTO goals(goalid,gameid,teamid,playerid,minute,half,goaltype)VALUES('$gid','$gameid','$teamid','$pid','$minute','$half','$gtype')";

//echo $sql;
mysql_query($sql);


?>
<script language="javascript">
	window.location="goals.php?k=Data Successfully Inserted";
	</script>