<?php
	session_start()
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.fa {
		  padding: 20px;
		  font-size: 30px;
		  width: 30px;
		  text-align: center;
		  text-decoration: none;
		  margin: 5px 2px;
		  border-radius: 50%;
		}

		.fa:hover {
		    opacity: 0.7;
		}

		.fa-facebook {
		  background: #3B5998;
		  color: white;
		}

		.fa-twitter {
		  background: #55ACEE;
		  color: white;
		}

		.fa-google {
		  background: #dd4b39;
		  color: white;
		}

		.fa-linkedin {
		  background: #007bb5;
		  color: white;
		}

		.fa-youtube {
		  background: #bb0000;
		  color: white;
		}

		.fa-instagram {
		  background: #125688;
		  color: white;
		}
		
		.topnav {
			background-color: #333;
			overflow: hidden;
		}
		
		.topnav a {
			float: left;
			display: block;
			color: #f2f2f2;
			text-align: center;
			padding: 14px 26px;
			text-decoration: none;
			font-size: 35px;
		}
		
		.topnav a:hover {
			background-color: #ddd;
			color: black;
		}
		
		.topnav a.active {
			background-color: #4CAF50;
			color: white;
		}
		
		a:link {
			text-decoration : none;
		}
		
		body {
			/*background-color : #d742f4;*/
			background-color: white; 
			margin : 0px;
			max-width : 100%;
			overflow : hidden;
			overflow-y : scroll;
		}
		
		#bottom_bar{
			position: static;
			width:100%;
			bottom: 0px;
			background-color: #333;
			float: left;
			color : white;
		}
		
		#about{
			position:relative;
			width: 200px;
			float : left;
			padding-left:50px;
			padding : 20px;
		}
		
		#about1{
			position:relative;
			width: 200px;
			float : left;
			padding-left:50px;
			padding : 20px;
			
		}
		
		#link1{
			position : relative;
			padding-top: 20px;
			font-size : 30px;
			left : 10%;
			color : white;
			float : left;
			padding-right: 50px;
			padding-left: 50px;
		}
		
		#doctor {
			background-image : url(Doctor-2.jpg);
			background-repeat : no-repeat;
			background-size : 100% 100%;
			<!--background-size : cover;-->
			width : 100%;
			height : 300px;
			padding : 100px;
		}
		
		#video {
			background-color : #d742f4;
			height : 400px;
			margin : 0px;
		}
		
		#doctor_form {
			position : relative;
			top : -10px;
			left : -70px;
			padding : 25px;
			font-size : 25px;
		}

		#aboutus {
			background-image : url(aboutus.jpg);
			opacity: 0.3;
    		filter: alpha(opacity=30);
    		background-color:rgb(0,0,0); /* fallback for IE 8 and below */
    background-color:rgba(0,0,0,0.3);
    		min-height: 500px; 
    		background-attachment: fixed;
    		background-position: center;
			background-repeat : no-repeat;
			background-size : 100% 100%;
			<!--background-size : cover;-->
			width : 100%;
			height : 300px;
			padding : 100px;
		}

		#aboutustext {
			opacity: 1;
			filter: alpha(opacity=100);
			color: black;
			font-size: 80px;
			font-family: cursive;
			position: absolute;
			top: 1050px;
			width: 100%;
		}

		.mySlides {
			display:none;
		}
		
		input[type=number]{
			padding : 10px;
			font-size : 15px;
			border-radius : 20px;
			background-color : #01b224; 
			border : none;
		}
		
		input[type=date]{
			padding : 10px;
			font-size : 15px;
			border-radius : 20px;
			background-color : #01b224; 
			border : none;
		}
		
		input[type=radio]{
			transform : scale(1);
			background-color : #01b224; 
			border : none;
		}
		
		#sub {
			padding : 5px;
			font-size : 17px;
			border-radius : 20px;
			background-color : white;
		}
		
		#signup {
			background-image : url(SignUp2.jpg);
			background-repeat : no-repeat;
			background-size : 100% 100%;
			<!--background-size : cover;-->
			width : 100%;
			height : 300px;
			padding : 100px;
		}

		input[type=text]{
			padding : 10px;
			font-size : 20px;
			border-radius : 20px;
			/*background-color : #01b224; 
			border : none;*/
		}
		
		input[type=password]{
			padding : 10px;
			font-size : 20px;
			border-radius : 20px;
			/*background-color : #01b224; 
			border : none;*/
		}
		
		#form {
			position  : relative;
			left : 650px;
		}

		#login {
			background-image: url(login_background.jpg);
			background-repeat : no-repeat;
			background-size : 100% 100%;
			background-color:rgba(0,0,0,0.3);
    		min-height: 500px; 
    		background-attachment: fixed;
    		background-position: center;
		}


		/*
		::-webkit-input-placeholder { 
    		color: white;
		}
		:-moz-placeholder { 
		   color: white;
		   opacity:  1;
		}
		::-moz-placeholder { 
		   color: white;
		   opacity:  1;
		}
		:-ms-input-placeholder { 
		   color: white;
		}
		::-ms-input-placeholder { 
		   color: white;
		}
		*/

	</style>
</head>

<body>
	<img src="hospital_logo.jpg" style="position: relative; height: 75px; width: 75px; padding:5px; top : 5px; left : 5px;"/> &nbsp &nbsp
	<span style="font-size: 40px; position:absolute; top:25px;">Get Well Hospital</span>
	<span style="position: absolute; left: 45%;top: 20px;font-size: 22px;">For Emergency : &nbsp &nbsp &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 45%;top: 50px;font-size: 22px;">For Appointments : &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 45%;top: 80px;font-size: 22px;">Board Line : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +91-22-66668888</span>
	<button style="position:absolute; left: 78%; top: 30px; font-size: 25px; padding: 5px;border-radius: 10px;width: 130px;background-color: #01b224; border: none;"><a href="http://localhost/Hospital%20Website/signup.php" title="Haven't signed up yet?"><span style="color: white;">Sign Up</span></a></button>
	<button style="position:absolute; left: 90%; top: 30px; font-size: 25px; padding: 5px;border-radius: 10px;width: 100px;background-color: #01b224; border: none;"><a href="http://localhost/Hospital%20Website/login.php" title="Click here to Login"><span style="color: white;">Login</span></a></button><br /><br />
	<marquee style="background-color: #333;color: white;position: relative; top:0px; padding: 15px; font-size: 25px;">Introducing the new Bariatrics (Obesity Surgery) and Bone Marrow Transplant</marquee><br/>
	<div>
	<img class="mySlides" src="image_slider1.jpg" style="height: 400px; width: 100%;"></img>
	<img class="mySlides" src="image_slider2.png" style="height: 400px; width: 100%;"></img>
	<img class="mySlides" src="image_slider3.jpg" style="height: 400px; width: 100%;"></img>
	<img class="mySlides" src="image_slider4.jpg" style="height: 400px; width: 100%;"></img>
	</div>

	<div class="topnav" id="myTopnav">
		<a href="http://localhost/Hospital%20Website/Hospital.php">Home</a>
		<a href="http://localhost/Hospital%20Website/aboutus.php">About Us</a>
		<a href="http://localhost/Hospital%20Website/findadoctor.php">Find A Doctor</a>
		<a href="http://localhost/Hospital%20Website/makeanappointment.php">Make An Appointment</a>
		<a href="http://localhost/Hospital%20Website/contactus.php">Contact Us</a>
	</div>

	<!-- End of common part -->
	<div id="login">
	<center>
	<br><br><br><br><br><br><br><br>
	<form name="myform" method="POST">

		<input type="text" id="uname" name="uname" placeholder="Enter your username" required/><br><br>
		<input type="password" id="password" name="password" placeholder="Enter your password" required/> <br><br>
		<input type="submit" name="submit" value="Login!" style="padding : 10px; font-size : 20px; border-radius : 20px; background-color: white; width: 260px;">	
	
	</form>
	</center>
	<br><br><br>
	</div>


	<?php
		if (isset($_POST['submit']))
		{
			
			$uname1= $_POST['uname'];
			$password1= $_POST['password'];
		
			$server = "localhost";
			$user = "root";
			$password = "";
			$db = "GET_WELL_HOSPITAL";
			$conn= new mysqli($server, $user, $password, $db);		

			$sql = "SELECT * FROM patient WHERE username = '$uname1' AND password = '$password1'";


			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
					$_SESSION["uname"] = $uname1;
					$_SESSION["password"] = $password1;
					$_SESSION["first_name"] = $row["first_name"];
					$_SESSION["last_name"] = $row["last_name"];
					$_SESSION["contact"] = $row["contact"];
					$_SESSION["gender"] = $row["gender"];
					$_SESSION["blood_group"] = $row["blood_group"];
					$_SESSION["rh_factor"] = $row["rh_factor"];
					$_SESSION["country"] = $row["country"];
				}

				/*
				$_SESSION["uname"] = $uname1;
				$_SESSION["password"] = $password1;
				$_SESSION["first_name"] = $row["first_name"];
				$_SESSION["last_name"] = $row["last_name"];
				$_SESSION["contact"] = $row["contact"];
				*/
				echo '<script type="text/javascript">
					alert("Login Successful!");
           			window.location = "http://localhost/Hospital%20Website/test.php"
      				</script>';
			} else {
    				echo '<script type="text/javascript">
					alert("Username and Password do not match! \nPlease try again!");
					</script>' .$conn->error;
			}
		
		}
	?>

	<!-- For the bottom bar-->
	<div id="bottom_bar">
		<div id="about" style="font-family: serif;">
			ABOUT<br>
			<hr width:60%>
			<a href="http://localhost/Hospital%20Website/aboutus.php" style="color: white; line-height: 25px;">Why GWH?</a><br>
			<a href="http://localhost/Hospital%20Website/aboutus.php" style="color: white; line-height: 25px;">Chairperson's Message</a><br>
			<a href="http://localhost/Hospital%20Website/aboutus.php" style="color: white; line-height: 25px;">Our Vision and Mission</a>
			
		</div>
		<div id="about">
			PATIENTS AND VISITORS<br>
			<hr width:60%>
			<a href="http://localhost/Hospital%20Website/findadoctor.php" style="color: white; line-height: 25px;">Find a Doctor</a><br>
			<a href="http://localhost/Hospital%20Website/makeanappointment.php" style="color: white; line-height: 25px;">Make an Appointment</a><br>
		</div>
		
		<div id="about1">
			<a href="http://localhost/Hospital%20Website/contactus.php" style="color: white;">CONTACT US</a><br>
			<hr width:60%>
			<span style="line-height: 25px;">
			Address : <br>
			Get Well Hospital ,<br>
			Nariman Point ,<br>
			Mumbai - 400021.
			</span>

		</div>
		<div style="position: relative; top: 45px; left: 30px;">
		<a href="#" class="fa fa-facebook"></a> &nbsp
		<a href="#" class="fa fa-twitter"></a> &nbsp
		<a href="#" class="fa fa-google"></a> &nbsp
		<a href="#" class="fa fa-linkedin"></a> &nbsp
		<a href="#" class="fa fa-youtube"></a> &nbsp
		<a href="#" class="fa fa-instagram"></a>
		</div>
	</div>

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 4000); // Change image every 4 seconds
		}
	</script>
	
</body>

</html>