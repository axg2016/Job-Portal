<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if(!isset($_SESSION))
{
session_start();
}
	$Degree=$_POST['cmbQual'];
	$Uni=$_POST['txtBoard'];
	$Passing=$_POST['cmbYear'];
	$Per=$_POST['txtPer'];
	$Id=$_SESSION['ID'];
	if($Degree=="Other")
	{
		$Degree=$_POST['txtOther'];
	}
	// Establish Connection with MYSQL
	$con = mysql_connect ("localhost","root");
	// Select Database
	mysql_select_db("job", $con);
	// Specify the query to Insert Record
	$sql = "insert into JobSeeker_Education(JobSeekId,Degree,University,PassingYear,Percentage) values('".$Id."','".$Degree."','".$Uni."','".$Passing."','".$Per."')";
	// execute query
	mysql_query ($sql,$con);
	// Close The Connection
	mysql_close ($con);
	
	echo '<script type="text/javascript">alert("Profile Created Succesfully");window.location=\'Education.php\';</script>';

?>
</body>
</html>
