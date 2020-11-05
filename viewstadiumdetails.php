<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style10 {	color: #FFFFFF;
	font-weight: bold;
}
.style11 {	

border:1px #98cdec solid;

color:#3596c5;
font-size:13px;
}
.style9 {            
             border-style: solid;
  
    border-width: 1px;
   border-color:#0099FF;
}







#nav {
list-style:none inside;
margin:0;
padding:0;
text-align:center;
}
#nav li {
display:block;
position:relative;
float:left;
background:#FF9933; /* menu background color */
}
#nav li a {
display:block;
padding:0;
text-decoration:none;
width:100px; /* this is the width of the menu items */
line-height:35px; /* this is the hieght of the menu items */
color:#ffffff; /* list item font color */
}
#nav li li a {font-size:80%;} /* smaller font size for sub menu items */
#nav li:hover {background:#003f20;} /* highlights current hovered list item and the parent list items when hovering over sub menues */
#nav ul {
position:absolute;
padding:0;
left:0;
display:none; /* hides sublists */
}
#nav li:hover ul ul {display:none;} /* hides sub-sublists */
#nav li:hover ul {display:block;} /* shows sublist on hover */
#nav li li:hover ul {
display:block; /* shows sub-sublist on hover */
margin-left:200px; /* this should be the same width as the parent list item */
margin-top:-35px; /* aligns top of sub menu with top of list item */

-->
</style>
</head>

<body>
<table width="900" border="1" align="center">
  <tr>
  <td>
   
   <img src="logo1.jpg" alt="" width="900" height="200"/>
 </td>
  </tr>
  <tr><td><ul id="nav">
<li><a href="team.php">Team</a></li>
<li><a href="stadium.php">Stadium</a>

</li>
<li><a href="referee.php">Referee</a></li>
<li><a href="players.php">Plyers</a></li>
<li><a href="coach.php">Coach</a></li>
<li><a href="matches.php">Matches</a></li>
<li><a href="goals.php">Goals</a></li>
<li><a href="#">Reports</a>
<ul>
<li><a href="#">Sub Item</a></li>
<li><a href="#">Sub Item</a></li>

</ul>
</li>
<li><a href="index.php">Logout</a></li>

</ul></td></tr>
  <tr>
    <td>
	<table width="800" border="1" >
    <tr>
	  <td colspan="5"><div align="center">View Goals </div></td>
      </tr>
    <tr bgcolor="#0066CC">
	  <td width="200">Stadium Id</td>
      <td width="200">Stadium Name</td>
      <td width="200">City</td>
	     <td width="200">Capacity</td>
      <td width="200">Surface Type</td>
	   
   
    </tr>
	 <?php
include('DBConnect.php');
  $sql="select stadiumid,stadiumname,city,capacity,surfacetype from stadium  ";
  $result=mysql_query($sql);
  while($row=mysql_fetch_array($result))
  {
  ?>
    <tr>
	   <td class="style11" ><?php echo $row[0]; ?></td>
        <td class="style11"><?php echo $row[1]; ?></td>
        <td class="style11"><?php echo $row[2]; ?></td>
        <td class="style11"><?php echo $row[3]; ?></td>
        <td class="style11"><?php echo $row[4]; ?></td>
		
  
    </tr>
		   <?php
  }
  ?>
  </table>
	</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
