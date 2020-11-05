    <?php

include('DBConnect.php');

$mid=$_POST['txtmid'];
$hteam=$_POST['txthteam'];
$ateam=$_POST['txtateam'];
$hscore=$_POST['txthscore'];
$ascore=$_POST['txtascore'];
$sname=$_POST['txtsname'];
$ttime=$_POST['txttime'];




$sql="INSERT INTO matches(matchid,hometeam,awayteam,homescore,awayscore,stadiumname,matchtime)VALUES('$mid','$hteam','$ateam','$hscore','$ascore','$sname','$ttime')";

//echo $sql;
mysql_query($sql);


?>
<script language="javascript">
	window.location="matches.php?k=Data Successfully Inserted";
	</script>