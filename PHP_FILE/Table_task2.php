<!DOCTYPE html>
<html>
<head>
	<title>table</title>

<!-- ================================================= CSS STYLE ============================================== -->
	<style type="text/css">
		td{
			border: 1px solid black;
			padding: 1px;
			border-color: #000000
		}

		table{
                border: 2px solid black;
                border-spacing: 0;
                border-color: #000000

		}

		table, td {
			text-align: center;
		}
	</style>
</head>
<body>

<!-- =================================================== main code ============================================ -->
	<center>
      
      
      <?php
      echo "<h1>"."Welcome to PHP"."</h1>";

       $my_list = array("Student Name " => "Student Marks","Ankit" =>45, "Rohit" =>86, "Devansh" =>65, "Chinmay" => 82);
       
       echo "<table>";

       foreach($my_list as $key => $value) {
       	echo "<tr>"."<td>".$key."</td>"."<td>".$value."</td>"."</tr>";
       	
       }

       echo "</table>";
      ?>
  </center>

 <!-- =========================================================================================================== -->
</body>
</html>