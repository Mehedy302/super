<html>
<?php

$username=$_POST['username'];
$password=$_POST['password'];

$db=mysql_connect('::1','root','');
if(!$db)
	die("Cant Connect to server................<br>".mysql_error());
else
		printf("Connected to server...............<br>");
	
mysql_select_db('trafic',$db);


$query='SELECT * FROM administrtion';
$result=mysql_query($query,$db);

if(!$result)
	die("Can't query.");


while($row=mysql_fetch_row($result))
		{
		if($row[0]==$_POST['username'] and $row[1]==$_POST['password'])
			{ $i=1;
			break;
			
			}
		else
			$i=0;
		 }


?>


 <center>
 <h1 style="color:red">
 <?php
 if($i==0)
	die('Sorry Invalid Username Or Password.................');
 
 ?>
 
 
 </h1>
 
 <form method="post" action="http://localhost/formhandler.php">
 
 <h3 style="color:green">
 ROAD NAME:<input type="text" name="roadname" id="roadname"/><pre>     *ex:atob,atoc........</pre><br>
 JAMPED:<input type="text" name="jam" id="jam"/><br><br>
 ACCIDENT:<input type="text" name="accident" id="accident"/><br>
 <h6 style="color:red">for jamped and accident valid input is "yes or no"</h6>
 
 <input type="submit" name="submit" id="submit" value="Submit"/>
 </h3>
 
 
 </form>
 
 
 </center>











</html>