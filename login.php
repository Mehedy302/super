 <html>

<?php

$db=mysql_connect('::1','root','');
if(!$db)
	die("Can't Connect to server................<br>".mysql_error());
 
	
mysql_select_db('trafic',$db);

	$query='SELECT * FROM useraccount';
	 
	$result=mysql_query($query,$db);
		if(!$result)
			die("Cant Perform the Action.....................<br>");
	 
	printf("Total User Account=".mysql_num_rows($result));


	while($row=mysql_fetch_row($result))
		{
		if($row[4]==$_POST['username'] and $row[5]==$_POST['password'])
			 {$i=1;
			 break;
			 }
		else
			$i=0;
		 }
		 
	if($i==1)
		{
		echo '<h4 style="color:green" align="center">';
			echo "Successfuly Loged In";
			echo '</h4>';
		
		}
		
	if($i==0)
		{
		
		echo '<h4 style="color:red" align="center">';
			echo "Invalid Username Or Password<br>";
			echo '<a href="http://localhost/create.php">Create An Account?</a>';
			echo '</h4>';
		
		}
	
	

?>



</html>