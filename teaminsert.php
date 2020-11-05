    <?php

include('DBConnect.php');

$tid=$_POST['txttid'];
$tlno=$_POST['txttlno'];
$name=$_POST['txtname'];
$location=$_POST['txtlocation'];
$manager=$_POST['txtmanager'];
$sname=$_POST['txtsname'];
$ccode=$_POST['txtccode'];




$sql="INSERT INTO team(teamid,licenceno,location,name,managername,shortname,countrycode)VALUES('$tid','$tlno','$name','$location','$manager','$sname','$ccode')";

//echo $sql;
mysql_query($sql);


?>
<script language="javascript">
	window.location="team.php?k=Data Successfully Inserted";
	</script>