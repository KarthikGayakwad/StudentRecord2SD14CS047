<?php
if(isset($_GET['btn'])){

$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','bb6fac8db41f59','88fc3309');

$usn=$_GET['usn'];
$name=$_GET['name'];

mysql_select_db('ad_ec2f9461298ca3d');
 
$sql="Insert into studentinfo values('".$usn."','".$name."')";

$ret_val=mysql_query($sql,$con) or die("Error" + mysql_error());

if($ret_val)
 print "Record Inserted";
else
 print "Record NOT Inserted";

mysql_close($con);
}
?>

<html>
<body>

<form action="insert.php" method="GET">

Enter USN <input type="text" name="usn">
Enter Name <input type="text" name="name">
<input type="Submit" value="insert" name="btn">
<a href="index.php">Home Page</a>
</form>
</body>
</html>