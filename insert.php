<html>
<?php
	$name=$_POST['name'];
	$email=$_POST['emailadress'];
	$sex=$_POST['gender'];
	$address=$_POST['adress'];
	$username=$_POST['username'];
	$password=$_POST['password'];


  $db=mysql_connect('::1','root','');
  if(!$db)
	die("Error to connect database........");

    mysql_select_db('trafic',$db);
	
	$query = "INSERT INTO useraccount(NAME,EMAIL,SEX,ADDRESS,USERNAME,PASSWORD) VALUES ('$name','$email','$sex','$address','$username','$password')";
	 
	$result=mysql_query($query);
	if(!$result)
		die("Cant Insert".mysql_error());
	
	
?>

	<h3 style="color:green" align="center">
	<?php
	
	if($result)
		printf("CONGRATULATIONS!!!!!..NOW YOU ARE MEMBER OF OUR WEBSITE.");
	
	
	?>
	
	
	</h3>


	<h3 style="color:green" align="center">
	
	
		YOUR INFORMATIONS ARE.<br>
		
	YOUR NAME: <?php printf($name);?><br>
	YOUR EMAILADRESS: <?php printf($email);?><br>
	YOUR GENDER: <?php printf($sex);?><br>
	YOUR ADRESS: <?php printf($address);?><br>
	YOUR USERNAME: <?php printf($username);?><br>
	YOUR PASSWORD: <?php printf($password);?><br>
	
	
	
	
	</h3>
	
	
	

</html>