<?php
if(isset($_GET['btn']))
{
	$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','bb6fac8db41f59','88fc3309');

	$usn=$_GET["usn"];
	$name=$_GET["name"];

	mysql_select_db('ad_ec2f9461298ca3d');

	$sql="Update studentinfo set name='".$name."' where usn='".$usn."'";

	mysql_query($sql,$con);

	$cnt = mysql_affected_rows($con);

	if($cnt)
		print "Record updated";
	else
		print "Updation failed";
	
	mysql_close($con);
}
?>

<html>
<body>
<form action="update.php" method="GET">
Enter USN <input type="text" name="usn">
Enter Name <input type="text" name="name">
<input type="submit" value="update" name="btn">
<a href="index.php">Home page</a>
</form>
</body>
</html>