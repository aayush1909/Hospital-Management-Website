<html>

<head>
	<style>
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
			background-color : #d742f4;
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
		
		input[type=text]{
			padding : 10px;
			font-size : 20px;
			border-radius : 20px;
		}
		
		input[type=password]{
			padding : 10px;
			font-size : 20px;
			border-radius : 20px;
		}
		
		input[type=number]{
			padding : 10px;
			font-size : 15px;
			border-radius : 20px;
		}
		
		input[type=date]{
			padding : 10px;
			font-size : 15px;
			border-radius : 20px;
		}
		
		input[type=radio]{
			transform : scale(1);
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
		
		#form {
			position  : relative;
			left : 650px;
		}
		
	</style>
</head>

<body>
	<!-- Top Menu-->
	
	<img src="hospital_logo.jpg" style="position: relative; height: 75px; width: 75px; padding:5px; top : 5px; left : 5px;"/> &nbsp &nbsp
	<span style="font-size: 40px; position:absolute; top:25px;">Get Well Hospital</span>
	<span style="position: absolute; left: 50%;top: 20px;">For Emergency : &nbsp &nbsp &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 50%;top: 40px;">For Appointments : &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 50%;top: 60px;">Board Line : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +91-22-66668888</span>
	<button style="position:absolute; left: 85%; top: 30px; font-size: 15px; padding: 5px;border-radius: 10px;width: 75px;"><a href="form2.php" title="Haven't signed up yet?">Sign Up</a></button>
	<button style="position:absolute; left: 93%; top: 30px; font-size: 15px; padding: 5px;border-radius: 10px;width: 75px;"><a href="#login" title="Click here to Login">Login</a></button><br /><br />
	<marquee style="background-color: #333;color: white;position: relative; top:0px; padding: 15px; font-size: 25px;">Introducing the new Bariatrics (Obesity Surgery) and Bone Marrow Transplant</marquee>
	<br/><img src="hospital_image.jpg" style="height: 400px; width: 100%;"></img>
	<div class="topnav" id="myTopnav">
		<a href="Hospital.html">Home</a>
		<a href="#news">Find A Doctor</a>
		<a href="#contact">Make An Appointment</a>
		<a href="ContactUs.html">Contact Us</a>
	</div>
	
	<!-- Top Menu Ends -->
	
	<div id="signup">
		<div id="form">
			<form name="myform" method="POST" onsubmit="return validateform()">
				<input type="text" id="fname" name="fname" placeholder="Enter your First Name" required /> &nbsp &nbsp
				<input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required /><br/><br/>
				<input type="text" id="uname" name="uname" placeholder="Enter your username" required /> &nbsp &nbsp
				<input type="text" id="mobile" name="mobile" placeholder="Enter your Contact Number" required /><br/><br/>
				<input type="password" id="password" name="password" placeholder="Enter your password" required /> &nbsp &nbsp
				<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" onchange='check_pass();' required /><br/><br/>
				<span style="font-size : 20px;"> &nbsp Male</span> <input type="radio" name="gender" value="M" required /> 
				<span style="font-size : 20px;">Female</span> <input type="radio" name="gender" value="F" required />
				<span style="font-size : 20px;">Other</span> <input type="radio" name="gender" value="N/A" required /> <br/><br/>
				<span style="font-size : 20px;"> &nbsp DOB</span> &nbsp &nbsp  <input type="date" id="dob" name="dob" placeholder="Enter your date of birth" style="padding : 8px; font-size : 15px;" required />  &nbsp &nbsp
				<span style="font-size : 20px;">Age</span> &nbsp &nbsp  <input type="number" name="age" placeholder="Enter your Age" size="4"required /> <br/><br/>
				<span style="font-size : 20px;"> &nbsp Country</span>  &nbsp
				<select name="country" style="padding: 8px; font-size : 15px; border-radius : 20px;">
					<option value="India">India</option>
					<option value="United States Of America">United States Of America</option>
					<option value="United Kingdom">United Kingdom</option>
					<option value="Pakistan">Pakistan</option>
					<option value="Afghanistan">Afghanistan</option>
					<option value="Australia">Australia</option>
					<option value="New Zealand">New Zealand</option>
					<option value="Canada">Canada</option>
					<option value="Singapore">Singapore</option>
					<option value="HongKong">HongKong</option>
					<option value="Brazil">Brazil</option>
					<option value="Argentina">Argentina</option>
					<option value="France">France</option>
					<option value="Germany">Germany</option>
					<option value="United Arab Emirates">United Arab Emirates</option>
					<option value="Russia">Russia</option>
					<option value="China">China</option>
					<option value="Spain">Spain</option>
					<option value="Phillipines">Phillipines</option>
					<option value="Sri Lanka">Sri Lanka</option>
					<option value="Thailand">Thailand</option>
					<option value="South Africa">South Africa</option>
					<option value="Kenya">Kenya</option>
					<option value="Egypt">Egypt</option>
					<option value="Israel">Israel</option>
				</select>
				<br/><br/>
				&nbsp
				<input type="submit" name="submit" value="Sign Up!" id="sub" style="width: 150px; background-color: #01b224; color: white;" disabled>
				
			</form>
		</div>
	</div>
	
	
	
	
	
	<?php
		
		if(isset($_POST['submit']))
			{
				$server = "localhost";
				$user = "root";
				$pwd = "";
				$db = "GET_WELL_HOSPITAL";
				$conn = new mysqli($server,$user,$pwd,$db);
				
				$fname1 = $_POST['fname'];
				$lname1 = $_POST['lname'];
				$username1 = $_POST['uname'];
				$pwd1 = $_POST['password'];
				$date1 = $_GET['name'];
				$gender1 = $_POST['gender'];
				$country1 = $_POST['country'];
				
				$sql = "INSERT INTO Sign_Up (first_name,last_name,username,password,Gender,Date_of_birth,Country)
			    VALUES('$fname1','$lname1','$username1','$pwd1','$gender1','$date1','$country1')";
				
				if($conn ->query($sql)=== TRUE)
					{
						echo "Sign Up Successful !";
					}
				else
					{
						echo "Sign Up Failed. Please try again !";
					}
				
				mysqli_close($conn);
				
			}	
	?>
	
	
	<script>  
		function validateform(){  
			var fname = document.getElementById("fname").value;  
			var lname = document.getElementById("lname").value;
			var password = document.getElementById("password").value;
			var date = document.getElementById("dob").value;
			var res = date.split("/");
			date = res[2] +"-"+ res[0] +"-"+ res[1];
			window.location.href = "http://localhost/Hospital%20Website/form3.php?name=" + date;
			/*
			$.ajax({
				url: 'ajax.php',
				data: {x: $my_variable},
				type: 'POST'
			});
			*/
			
			if (fname==null || fname=="" || lname==null || lname==""){  
			  alert("Name can't be blank");  
			  return false;  
			}else if(password.length<6){  
			  alert("Password must be at least 6 characters long.");  
			  return false;  
			  }  
		}  
		
		function check_pass() {
			if (document.getElementById('password').value ==
					document.getElementById('confirm_password').value) {
				document.getElementById('sub').disabled = false;
			} else {
				document.getElementById('sub').disabled = true;
				alert("The password entered earlier doesnt match.");
			}
		}
	</script>
	
	
	
	<!-- For the bottom bar-->
	<div id="bottom_bar">
		<div id="about">
			ABOUT<br>
			<hr width:60%>
			
		</div>
		<div id="about">
			PATIENTS AND VISITORS<br>
			<hr width:60%>
			Find a Doctor<br>Make an Appointment<br>
		</div>
		
		<div id="about1">
			HEALTH INFORMATION<br>
			<hr width:60%>
			
		</div>
	</div>
	
</body>

</html>