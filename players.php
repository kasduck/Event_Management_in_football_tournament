<?php
error_reporting(0);
include('DBConnect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<title>Untitled Document</title>
 <script type="text/javascript" language="javascript" src="date/datetimepicker_css.js"></script>

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
    <td><img src="logo1.jpg" alt="" width="900" height="200"/></td>
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
    <td><div align="center">
	<form name="frm" action="playerinsert.php" method="post"  enctype="multipart/form-data">
      <table width="500" border="0" class="style9">
        <tr>
          <td colspan="2" bgcolor="#0099FF"><div align="center" class="style10">Players Details </div></td>
        </tr>
        <tr>
          <td width="200" class="style11">Player Id </td>
          <td class="style11"><input name="txtpid" type="text" id="txtpid">          </td>
        </tr>
        <tr>
          <td class="style11">PLicence Number </td>
          <td class="style11"><input name="txtplno" type="text" id="txtplno" />          </td>
        </tr>
        <tr>
          <td class="style11">Name</td>
          <td class="style11"><input name="txtname" type="text" id="txtname" />          </td>
        </tr>
        <tr>
          <td class="style11">Nationality</td>
          <td class="style11"><input name="txtnationality" type="text" id="txtnationality" />          </td>
        </tr>
        <tr>
          <td class="style11">Contract Start Date </td>
          <td class="style11">  <input type="text" name="dtdate1" id="dtdate1" />
              <img src="date/images2/cal.gif" alt="a"  style="cursor:pointer" onclick="javascript:NewCssCal('dtdate1','ddMMyyyy')" /></td>
        </tr>
        <tr>
          <td class="style11">Contract End Date </td>
          <td class="style11"><input type="text" name="dtdate" id="dtdate" />
              <img src="date/images2/cal.gif" alt="a"  style="cursor:pointer" onclick="javascript:NewCssCal('dtdate','ddMMyyyy')" /></td>
        </tr>
        <tr>
          <td class="style11">Place Of Birth </td>
          <td class="style11"><input name="txtpbirth" type="text" id="txtpbirth" /></td>
        </tr>
        <tr>
          <td class="style11">Date Of Birth </td>
          <td class="style11"><input type="text" name="dtdate2" id="dtdate2" />
              <img src="date/images2/cal.gif" alt="a"  style="cursor:pointer" onclick="javascript:NewCssCal('dtdate2','ddMMyyyy')" /></td>
        </tr>
        <tr>
          <td class="style11">Team Id </td>
          <td class="style11"><select name="cmbBookName" id="cmbBookName">
				<option value="">Select Team Id</option>
				<?php
				$sql="select * from team";
				$rs=mysql_query($sql);
				while($row=mysql_fetch_array($rs))
				{
				?>
				<option><?php echo $row[0];?></option>
				<?php
				}
				?>
                </select></td>
        </tr>
        <tr>
          <td class="style11">Players Image </td>
          <td class="style11"><input type="file" name="file" /></td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#0099FF"><div align="center">
              <input name="btnsub" type="submit" id="btnsub" value="Submit" />
          </div></td>
        </tr>
      </table>
	  </form>
    </div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
