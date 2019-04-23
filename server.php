<html>
<?php
$destination=$_POST['destination'];
$location=$_POST['location'];

?>
<h3 style="color:red" align="center">
<?php

if($destination==$location)
	{
	
	echo "Please Enter The Correct Destination!!!";
	
	
	exit;
	
	}
		
printf('<frame src="page.php3?session_id=%s">', $session_id);

?>

</h3>



<html>