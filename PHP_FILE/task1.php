<!DOCTYPE html>
<html>
<head>
	<title>task</title>
</head>
<body>

	<h3 style="font-family: Harlow Solid Italic;">
      <?php
           $demo1 = "1,2,3,4,5,6";
           echo str_replace("4", "$",$demo1);
           echo "<br>";


          $demo2 = "demo_user@gmail.com";
          echo substr ($demo2, -3);
          echo "<br>";

          $demo3 = "Abhishek Gupta";
          echo strrev ($demo3)
     ?>

    </h1>
</body>
</html>