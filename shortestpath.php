<?php
$_d=array();
$_d[1][2]=1;
$_d[1][3]=3;
$_d[1][4]=1;
$_d[1][5]=5;
$_d[2][1]=1;
$_d[2][3]=2;
$_d[2][4]=2;
$_d[2][5]=3;

$a=1;
$b=5;

$s=array();

$q=array();

foreach(array_keys($_d)as $val)$q[$val]=9999;
$q[$a]=0;


while(!empty($q))
	{
	$min=array_search(min($q),$q);
	
	if($min==$b)
		break;
		
		foreach($_d[$min] as $key=>$val)
			if(!empty($q[$key]) and $q[$min]+$val<$q[$key])
				{
				
				$q[$key]=$q[$min]+$val;
				$s[$key]=array($min,$q[$key]);
				
				
				}
	
		unset($q[$min]);
	
	}

$path=array();
$pos=$b;
while($pos!=$a)
	{
	$path[]=$pos;
	$pos=$s[$pos][0];
	
	
	}

$path[]=$a;
$path=array_reverse($path);



echo 'Shortest Path IS '.implode('->',$path);


?>