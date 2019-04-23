<html>
<h1 style="color:green" align="center">

<?php

 
 if($_POST['destination']==$_POST['location']){
	echo '<h2 style="color:red" align="center">PLEASE CHOOSE THE CORRECT DESTINATION</h2>';
die();
}
	else{
	if($_POST['destination']=="a")
		$b=1;
	else if($_POST['destination']=="b")
		$b=2;
 else if($_POST['destination']=="c")
		$b=3;
	else if($_POST['destination']=="d")
		$b=4;
 else
	$b=5;
	
	
	
	
	
	
if($_POST['location']=="a")
	$a=1;
else if($_POST['location']=="b")
	$a=2;
	else if($_POST['location']=="c")
	$a=3;
	else if($_POST['location']=="d")
	$a=4;
else
	$a=5;
	
 
 
 
 
 }
 
 
 
 
 

//set the distance array
$_distArr = array();
$_distArr[1][2] = 10;
$_distArr[1][3] = 15;
$_distArr[1][4] = 18;
$_distArr[1][5] = 10;
$_distArr[2][1] = 10;
$_distArr[2][3] = 13;
$_distArr[2][4] = 15;
$_distArr[2][5] = 19;
$_distArr[3][1] = 15;
$_distArr[3][2] = 13;
$_distArr[3][4] = 50;
$_distArr[4][3] = 11;
$_distArr[3][5] = 35;
$_distArr[4][1] = 18;
$_distArr[4][2] = 15;
$_distArr[4][3] = 50;
$_distArr[4][5] = 9;
$_distArr[5][1] = 10;
$_distArr[5][2] = 19;
$_distArr[5][3] = 35;
$_distArr[5][4] = 9;






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
			if($row[1]!="no" or $row[2]!="no")
			{
				
			$_distArr[1][2]=1000000;
			$_distArr[2][1]=1000000;
			}
			}
	
	
	
	
	 if($row[0]=="atoc")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[1][3]=1000000;
			$_distArr[3][1]=1000000;
			}
			}
	
	if($row[0]=="atod")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[1][4]=1000000;
			$_distArr[4][1]=1000000;
			}
			}
	
	
	if($row[0]=="atoe")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[1][5]=1000000;
			$_distArr[5][1]=1000000;
			}
			}
	
	if($row[0]=="btoc")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[2][3]=1000000;
			$_distArr[3][2]=1000000;
			}
			}
	
	
	if($row[0]=="btod")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[2][4]=1000000;
			$_distArr[4][2]=1000000;
			}
			}
			
			
	if($row[0]=="btoe")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[2][5]=1000000;
			$_distArr[5][2]=1000000;
			}
			}
	
	
	if($row[0]=="ctod")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[3][4]=1000000;
			$_distArr[4][3]=1000000;
			}
			}
			
			
			
			
	if($row[0]=="ctoe")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[3][5]=1000000;
			$_distArr[5][3]=1000000;
			}
			}
			
	if($row[0]=="dtoe")
			{
			if($row[1]!="no" or $row[2]!="no")
			{	
			$_distArr[4][5]=1000000;
			$_distArr[5][4]=1000000;
			}
			}
	
	
	
	
	
	
	
	}




$S = array();//the nearest path with its parent and weight
$Q = array();//the left nodes without the nearest path
foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
$Q[$a] = 0;


 

//start calculating
while(!empty($Q)){
    $min = array_search(min($Q), $Q);//the most min weight
    if($min == $b) break;
    foreach($_distArr[$min] as $key=>$val) if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) {
        $Q[$key] = $Q[$min] + $val;
        $S[$key] = array($min, $Q[$key]);
    }
    unset($Q[$min]);
}

//list the path
$path = array();
$pos = $b;
$j=0;
if(!array_key_exists($b,$S))
	{
	echo 'Found No Way......................<br>';
	echo 'Please Wait For A Few Miniutes And Try Again!!!!!!!!!!<br>';
	return;
	
	}


while($pos != $a){
    $path[] = $pos;
    $pos = $S[$pos][0];
	$j=$j+1;
}
$path[] = $a;
$path = array_reverse($path);

//print result

echo '<table border="1" style="color:green" font-size:330>';

echo "<th>";
echo 'Location:';
if($a==1)
	echo "A";
else if($a==2)
	echo "B";

else if($a==3)
	echo "C";

else if($a==4)
	echo "D";

else
	echo "E";
	
echo "</th>";

echo "<th>";
echo 'Destination:';
if($b==1)
	echo "A";
else if($b==2)
	echo "B";

else if($b==3)
	echo "C";

else if($b==4)
	echo "D";

else
	echo "E";
	
echo "</th>";


echo '</table>';


 
echo '<br>';

echo 'The Shortest Path Is:';

for($i=0;$i<=$j;$i++)
	{
	if($path[$i]==1)
		echo 'A';
	else if($path[$i]==2)
		echo 'B';
	else if($path[$i]==3)
		echo 'C';
	else if($path[$i]==4)
		echo 'D';
	else if($path[$i]==5)
		echo 'E';
	
	else
		echo 'F';
	
	if($i!=$j)
	echo '->';

	
	}
	echo "<br>Distance Is:".$S[$b][1]." KM";
 
	

?>

</h1>

</html>