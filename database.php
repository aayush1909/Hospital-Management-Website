<html>
<head>
</head>
<body>
	<?php
		$server = "localhost";
		$user = "root";
		$pwd = "";
		
		$conn = new mysqli($server,$user,$pwd);
		/*
		if($conn -> connect_error)
			{
				die("error" .$conn ->connect_error);
			}
		echo "Connection Successful";
		*/
		$sql = "CREATE DATABASE GET_WELL_HOSPITAL";
		if($conn ->query($sql)=== TRUE)
			{
				echo "DATABASE created successfully";
			}
		else
			{
				echo "DATABASE creation unsuccessful";
			}
		
		mysqli_close($conn);
	?>
</body>
</html>