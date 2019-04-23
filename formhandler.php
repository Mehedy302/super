<html>
<?php

$db=mysql_connect('::1','root','');
if(!$db)
	die("Can't Connect to server................<br>".mysql_error());
 
	
mysql_select_db('trafic',$db);
$query='UPDATE controler SET jamped="' . $_POST['jam'].'",accident="'.$_POST['accident'].'" WHERE roadname="'.$_POST['roadname'].'"';
   
   $result=mysql_query($query,$db);
   if($result)
	printf("Status has been changed Successfuly.");
   else
	die();





?>




</html>