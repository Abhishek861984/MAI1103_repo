<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
   if ($_SERVER['REQUEST_METHOD']=='POST'){
   	$x=$_POST['x'];
   	$y=$_POST['y'];
   	
   	echo "Result using POST Method <br>";
   	print ("x+y =".($x+$y)."<br>");
   }
?>
</body>
</body>
</html>