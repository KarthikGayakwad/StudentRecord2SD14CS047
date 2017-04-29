<?php
	$usn=$_GET["usn"];
	$con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','bb6fac8db41f59','88fc3309');
	
	$sql="Select * from studentinfo where usn='".$usn."'";

	mysql_select_db('ad_ec2f9461298ca3d');

	$result=mysql_query($sql,$con);
	$val=mysql_affected_rows($con);

	$row=mysql_fetch_array($result,MYSQL_BOTH);
	if($val)
		print $row['USN']." and ".$row['Name'];	
	else
		print "Record NOT found";

	mysql_close($con);
?>