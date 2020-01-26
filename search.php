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
		$sql = "SELECT * FROM Sign_Up WHERE first_name LIKE 'A%' ";
		$res = $conn -> query($sql);
		if($res -> num_rows > 0)
			{
				echo "Value Displayed Successfully";
			}
		else
			{
				echo "Values Displayed Unsuccessfully";
			}
		
		mysqli_close($conn);
	?>
</body>
</html>