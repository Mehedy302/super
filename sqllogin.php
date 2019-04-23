  <html>
  
  <body>
   
  <?php
  $road_name=$_POST['roadname'];
  $jamped=$_POST['jamped'];
  $accident=$_POST['accident'];
  
  ?>
  
  
  
  
  <?php
   $link=mysqli_connect('localhost','root','','trafic');
  if(!$link)
	die("Cant Connect to database".mysqli_error());
  
  
  $query="INSERT INTO 'control'(roadnam,jamped,accident"."VALUES('$road_name','$jamped','$accident')";
  
 $result= mysqli_query($link,$query);
 if(!$result)
	die("Can't Insert Into table".mysqli_error());
 else
	printf("Successful");
  ?>
  
  
  
  
  
  </body>
  
  
  
  </html>