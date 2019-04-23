<html>

<title>bdtriffic control</title>
<body>
<h2 style="color:green" align="center">WELCOME TO THE FREE TRAFFIC CONTROL WEBSITE</h2>

<hr>   <hr>

<table border="1" width="1300" height="554" cellspacing="0" cellpadding="0">
<tr><td valign="top" width="100">

<form method="post" action="http://localhost/login.php"/>
<br>
<h4 style="color:blue"><pre># Log In Information #</pre></h4>
<pre style="color:blue">
*Username:<input type="text" name="username" id="username" value=""/>

*Password:<input type="password" name="password" id="password" value=""/>
			
			<input type="submit" value="LOG IN" id="submit" name="submit" bgcolor="#ffffff">

</pre>
</form>



<hr>
<ul><h5 style="color:red">DONT HAVE AN ACCOUNT!</h5></ul>
<ul><a style="color:green" href="http://localhost/create.php"><i>Create an Account</i></a></ul>

<hr>
<ul><a style="color:green" href="http://localhost/about.php"><i>About Our Website</i></a></ul>
<ul><a style="color:green" href="http://localhost/faqs.php"><i>FAQS</i></a></ul>

<hr>


</td>

<td valign="top" width="1000">
     
	<center>
	<h4 style="color:green">
	<?php
	
	$i=date('H');
	$i=$i+4;
	echo "TIME:";
	echo $i;
	echo date(':ia d-m-y');
	
	echo "<br>";

	if($i>=20)
		{
		$man="NIGHT";
		
		
		}
		
		
		else if($i>=18)
		{
		$man="EVENING";
		}
		
		
		
	else if($i>=12){
	
	$man="AFTERNOON";
	
	}
	
	
	else
		$man="MORNING";
	
	
	 
	
	
	
	
	
	
	
	
	echo "GOOD ".$man;
	

?>








</h4>

<hr> <hr>

<form method="post" action="http://localhost/shortest2.php">

<h4 style="color:green">Please Select Your Destination:</h4>

<select size="1" name="destination">

	<option value="a">Point A</option>
	<option value="b">Point B</option>
	<option value="c">Point C</option>
	<option value="d">Point D</option>
	<option value="e">Point E</option>
	
</select>


<br>




<h4 style="color:green">Please Select Your Current Location:</h4>

<select size="1" name="location">

	<option value="a">Point A</option>
	<option value="b">Point B</option>
	<option value="c">Point C</option>
	<option value="d">Point D</option>
	<option value="e">Point E</option>
	
</select>


<br>
<br>
<input type="submit" value="Submit" id="submit"/>

<hr>



</form>



<?php

$db=mysql_connect('::1','root','');
if(!$db)
	die("Cant connect to server");
	
mysql_select_db('trafic',$db);


$query='SELECT * FROM controler';
$result=mysql_query($query,$db);
if(!$result)
	die("Cant perform Query");
	
while($row=mysql_fetch_row($result))
	{
	
		 if($row[0]=="atob")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcatob=1;
			else
				$jcatob=0;
			}
	
		if($row[0]=="atoc")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcatoc=1;
			else
				$jcatoc=0;
			}
			
			
			if($row[0]=="atod")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcatod=1;
			else
				$jcatod=0;
			}
			
			if($row[0]=="atoe")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcatoe=1;
			else
				$jcatoe=0;
			}
			
			if($row[0]=="btoc")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcbtoc=1;
			else
				$jcbtoc=0;
			}
			
			if($row[0]=="btod")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcbtod=1;
			else
				$jcbtod=0;
			}
			
			if($row[0]=="btoe")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcbtoe=1;
			else
				$jcbtoe=0;
			}
			
			if($row[0]=="ctod")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcctod=1;
			else
				$jcctod=0;
			}
			
			
			if($row[0]=="ctoe")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcctoe=1;
			else
				$jcctoe=0;
			}
			
			if($row[0]=="dtoe")
			{
			if($row[1]=="no" and $row[2]=="no")
				$jcdtoe=1;
			else
				$jcdtoe=0;
			}
			
			
			
			
	
	
	
	
	
	
	}





?>



















<table border="0">

<tr bgcolor="#aa33aa" align="center">

<td width="200">RODE NAME</td>

<td width="100">CONDITION</td>
<td width="100">DISTANCE</td>

</tr>


<tr bgcolor="#cccccc" align="center">

<td width="200">A TO B</td>

<td width="100">


<?php

if($jcatob==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");

?>





</td>

<td width="100">
<?php

$k=" KM";
$datob=10;

echo $datob.$k;

?>


</td>


</tr>




<tr bgcolor="#ffccff" align="center">

<td width="200">A TO C</td>

<td width="100">
<?php
if($jcatoc==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>



<td width="100">
<?php

$k=" KM";
$datoc=15;

echo $datoc.$k;

?>


</td>



</tr>




<tr bgcolor="#cccccc" align="center">

<td width="200">A TO D</td>

<td width="100">

 <?php
if($jcatod==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>





</td>



<td width="100">
<?php

$k=" KM";
$datod=18;

echo $datod.$k;

?>


</td>



</tr>



<tr bgcolor="#ffccff" align="center">

<td width="200">A TO E</td>

<td width="100">

 <?php
if($jcatoe==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>






</td>



<td width="100">
<?php

$k=" KM";
$datoe=10;

echo $datoe.$k;

?>


</td>



</tr>



<tr bgcolor="#cccccc" align="center">

<td width="200">B TO C</td>

<td width="100">

 <?php
if($jcbtoc==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>

<td width="100">
<?php

$k=" KM";
$dbtoc=13;

echo $dbtoc.$k;

?>


</td>



</tr>





<tr bgcolor="#ffccff" align="center">

<td width="200">B TO D</td>

<td width="100">

 <?php
if($jcbtod==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>





<td width="100">
<?php

$k=" KM";
$dbtod=15;

echo $dbtod.$k;

?>


</td>

</tr>















<tr bgcolor="#cccccc" align="center">

<td width="200">B TO E</td>

<td width="100">

 <?php
if($jcbtoe==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>



<td width="100">
<?php

$k=" KM";
$dbtoe=19;

echo $dbtoe.$k;

?>


</td>

</tr>



<tr bgcolor="#ffccff" align="center">

<td width="200">C TO D</td>

<td width="100">

 
 <?php
if($jcctod==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>

<td width="100">
<?php

$k=" KM";
$dctod=50;

echo $dctod.$k;

?>


</td>

</tr>


<tr bgcolor="#cccccc" align="center">

<td width="200">C TO E</td>

<td width="100">

 <?php
if($jcctoe==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>



<td width="100">
<?php

$k=" KM";
$dctoe=35;

echo $dctoe.$k;

?>


</td>

</tr>






<tr bgcolor="#ffccff" align="center">

<td width="200">D TO E</td>

<td width="100">
 <?php
if($jcdtoe==1)
	{
	echo ("<p><i>SAFE</i></p>");
	
	}
else
	echo ("<p><i>BLOCKED</i></p>");
 


?>


</td>


<td width="100">
<?php

$k=" KM";
$ddtoe=9;

echo $ddtoe.$k;

?>


</td>

</tr>













</table>






</center>






	</td>
	
	</tr>
		
		
	</table>

	</body>
	</html>