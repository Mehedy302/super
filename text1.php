<html>

<?php

$db=mysql_connect('::1','root','');
if(!$db)
	die("Cant Connect to server................<br>".mysql_error());
else
		printf("Connected to server...............<br>");
	
mysql_select_db('trafic',$db);



	if(isset($_POST['submit']) and $db)
		{
		printf("Accessed Successfully!");
		$jatob=$_POST['jatob'];
		$jatoc=$_POST['jatoc'];
		$jatod=$_POST['jatod'];
		$jatoe=$_POST['jatoe'];
		$jbtoc=$_POST['jbtoc'];
		$jctod=$_POST['jbtod'];
		$jbtoe=$_POST['jbtoe'];
		$jctod=$_POST['jctod'];
		$jctoe=$_POST['jatoe'];
		
		$aatob=$_POST['aatob'];
		$aatoc=$_POST['aatoc'];
		$aatod=$_POST['aatod'];
		$aatoe=$_POST['aatoe'];
		$abtoc=$_POST['abtoc'];
		$actod=$_POST['abtod'];
		$abtoe=$_POST['abtoe'];
		$actod=$_POST['actod'];
		$actoe=$_POST['aatoe'];
		
		}
   $query='UPDATE controler SET jamped="' . $_POST['jatob'].'",accident="'.$_POST['aatob'].'" WHERE roadname="atob"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jatoc'].'",accident="'.$_POST['aatoc'].'" WHERE roadname="atoc"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jatod'].'",accident="'.$_POST['aatod'].'" WHERE roadname="atod"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jatoe'].'",accident="'.$_POST['aatoe'].'" WHERE roadname="atoe"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	 
	
	 $query='UPDATE controler SET jamped="' . $_POST['jbtoc'].'",accident="'.$_POST['abtoc'].'" WHERE roadname="btoc"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jbtod'].'",accident="'.$_POST['abtod'].'" WHERE roadname="btod"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jbtoe'].'",accident="'.$_POST['abtoe'].'" WHERE roadname="btoe"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	
	
	
	 
	
	 $query='UPDATE controler SET jamped="' . $_POST['jctod'].'",accident="'.$_POST['actod'].'" WHERE roadname="ctod"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
 
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jctoe'].'",accident="'.$_POST['actoe'].'" WHERE roadname="ctoe"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	
	
	 $query='UPDATE controler SET jamped="' . $_POST['jdtoe'].'",accident="'.$_POST['adtoe'].'" WHERE roadname="dtoe"';
   
   $result=mysql_query($query,$db);
   if(!$result)
	die();
	printf("<br>Status Changed Successfuly");

		 
	
	
	

?>




<hr>



<h3 style="color:green" align="center">

<i>Current Status.</i>

</h3>

<hr>


<center>





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











</html>