<html>
<head>
</head>
<body>
	<?php
		$server = "localhost";
		$user = "root";
		$pwd = "";
		$db = "GET_WELL_HOSPITAL";
		$conn = new mysqli($server,$user,$pwd,$db);
		/*
		if($conn -> connect_error)
			{
				die("error" .$conn ->connect_error);
			}
		echo "Connection Successful";
		*/
		$sql = "CREATE TABLE appointment (username varchar(100),
									  first_name varchar(100),
									  last_name varchar(100),
									  contact INT,
									  gender varchar(5),
									  blood_group varchar(5),
									  rh_factor varchar(5),
									  country varchar(20),
									  date_time datetime,
									  doctor varchar(50)
									)";
				   
		if($conn ->query($sql)=== TRUE)
			{
				echo "Values updated successfully";
			}
		else
			{
				echo "Values updated unsuccessfully";
			}
		
		mysqli_close($conn);
	?>
</body>
</html>