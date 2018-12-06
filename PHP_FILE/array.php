<!DOCTYPE html>
<html>
<head>
	<title>array</title>
</head>
<body>
       <?php
       $my_array = array ('Tiger',"peacock","india");
       print_r($my_array);
       echo "<br>";

       echo $my_array[0]."and".$my_array[1]."are precious in".$my_array[2];

       echo "<br>"; 
       echo "<br>";

       $asso_array = array('national animal' => 'Tiger','national bird' =>'peacock','country'=>'India');
       print_r($asso_array);
       echo "<br>";

       echo $asso_array["national animal"]."is our National Animal and". $asso_array['national bird']."is our national bird";
       $asso_array
       ?>
</body>
</html>