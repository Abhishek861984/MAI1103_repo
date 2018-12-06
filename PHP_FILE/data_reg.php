<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
	<h1>
<?php
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$db_name  = "Abhishek_DATA";

		$conn =  mysqli_connect($hostname,$username,$password,$db_name);

		if (!$conn) {
			echo "Connection Failed:
			".mysqli_connect_error();
		}

		else{
			echo "Connection Successful";

		


		// cerating Database

		$query = " CREATE DATABASE abhi_db";

		$res = mysqli_query($conn,$query);

		echo "$res";
		echo "<br>";

        $query = "CREATE TABLE abhi_db.mytable(FirstName varchar(20),LastName varchar(20), Phone_No int(20))";
		$res = mysqli_query($conn,$query);
		if ($res){
			echo "Data Added Successful";

		}

		else {
			echo "Data Adding Failed:
			".mysqli_error($conn);

			$query = " INSERT INTO 
			abhi_db.mytable
			(FirstName,LastName,Phone_No) VALUES
			('Abhishek','Gupta',8619844650)";

			$result = mysqli_query($conn,$query);
			if ($result){
				echo "<br> New Data Added to Database<br>";
			}
			else
			{
				echo "Data Enter Failed:
				".mysqli_error($conn);
			}

		}

		$query = "SELECT *FROM responseslab8";

		$result = mysqli_query($conn,$query);

		if (mysqli_num_rows($result)>0){
			while ($row =
				mysqli_fetch_assoc($result)) {
				echo "<br>";
				echo ($row["studentname"]);
				echo "<br>";

			}

			

		}

}

?>
</h1>
</body>
</html>




<!-- <div class="well">  -->
	    <div class="form col-md-6">
	      <label>Date of Birth</label>
	      <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"><br>
	    </div>
	<!-- </div> -->

	<!-- <div class="well"> 
	</div> -->
