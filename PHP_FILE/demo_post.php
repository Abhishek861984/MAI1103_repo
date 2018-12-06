<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD']==='POST'){
   	$p=$_POST['p'];
   	$r=$_POST['r'];
   	$t=$_POST['t'];
   	
   	echo "Result using POST Method <br>";
   	print ("Simple Interest =".$p*$r/100*$t."<br>");
   }
?>
</body>
</html>