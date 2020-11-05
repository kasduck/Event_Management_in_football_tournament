    <?php

include('DBConnect.php');

$sid=$_POST['txtsid'];
$name=$_POST['txtname'];
$city=$_POST['txtcity'];
$capacity=$_POST['txtcapacity'];
$surface=$_POST['txtsurface'];




$sql="INSERT INTO stadium(stadiumid,stadiumname,city,capacity,surfacetype)VALUES('$sid','$name','$city','$capacity','$surface')";

//echo $sql;
mysql_query($sql);


?>
<script language="javascript">
	window.location="stadium.php?k=Data Successfully Inserted";
	</script>