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
		
		input[type=number]{
			padding : 10px;
			font-size : 15px;
			border-radius : 20px;
			/*background-color : #01b224; 
			border : none;*/
		}
		
		input[type=date]{
			padding : 10px;
			font-size : 15px;
			border-radius : 20px;
			/*background-color : #01b224; 
			border : none;*/
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
		
		#form {
			position  : relative;
			left : 650px;
		}
		
		
		
	</style>
</head>

<body>
	<img src="hospital_logo.jpg" style="position: relative; height: 75px; width: 75px; padding:5px; top : 5px; left : 5px;"/> &nbsp &nbsp
	<span style="font-size: 40px; position:absolute; top:25px;">Get Well Hospital</span>
	<span style="position: absolute; left: 45%;top: 20px;font-size: 22px;">For Emergency : &nbsp &nbsp &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 45%;top: 50px;font-size: 22px;">For Appointments : &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 45%;top: 80px;font-size: 22px;">Board Line : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +91-22-66668888</span>
	<button style="position:absolute; left: 78%; top: 30px; font-size: 25px; padding: 5px;border-radius: 10px;width: 130px;background-color: #01b224; border: none;"><a href="http://localhost/Hospital%20Website/form3.php" title="Haven't signed up yet?"><span style="color: white;">Sign Up</span></a></button>
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
	
	<div id="signup">
		<div id="form">
			<form name="myform" method="POST" onsubmit="return validateform()">
				<input type="text" id="fname" name="fname" placeholder="Enter your First Name" required /> &nbsp &nbsp
				<input type="text" id="lname" name="lname" placeholder="Enter your Last Name" required /><br/><br/>
				<input type="text" id="uname" name="uname" placeholder="Enter your username" required /> &nbsp &nbsp
				<input type="text" id="mobile" name="mobile" placeholder="Enter your Contact Number" required /><br/><br/>
				<input type="password" id="password" name="password" placeholder="Enter your password" required /> &nbsp &nbsp
				<input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm password" onchange='check_pass();' required/><br/><br/>
				<span style="font-size : 20px;"> &nbsp Male</span> <input type="radio" name="gender" value="M" required /> 
				<span style="font-size : 20px;">Female</span> <input type="radio" name="gender" value="F" required />
				<span style="font-size : 20px;">Other</span> <input type="radio" name="gender" value="N/A" required /> <br/><br/>
				<!--
				<span style="font-size : 20px; color: #01b224;font-weight: bold;"> &nbsp DOB</span> &nbsp &nbsp  <input type="date" id="dob" name="dob" placeholder="Enter your date of birth" style="padding : 8px; font-size : 15px;" required />  &nbsp &nbsp
				<span style="font-size : 20px; color: #01b224;font-weight: bold;">Age</span> &nbsp &nbsp  <input type="number" name="age" placeholder="Enter your Age" size="4" required /> <br/><br/>
				-->
				<span style="font-size : 20px;"> &nbsp Blood Group</span>  &nbsp
				<select name="bg" style="width: 129px;padding: 8px; font-size : 15px; border-radius : 20px;">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="AB">AB</option>
					<option value="O">O</option>
				</select>	
				&nbsp &nbsp

				<span style="font-size : 20px;"> &nbsp Rh Factor</span>  &nbsp
				<select name="rh" style="width: 129px;padding: 8px; font-size : 15px; border-radius : 20px;">
					<option value="+ve">+ve</option>
					<option value="-ve">-ve</option>
					
				</select>	


				<br><br>
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
				<input type="submit" name="submit" value="Sign Up!" id="sub" style="width: 150px; font-size: 25px;" >
				
			</form>
		</div>
	</div>
	
	
	
	
	
	<?php
		
		if(isset($_POST['submit']))
			{
				/*
				echo "
				<script type=\"text/javascript\">  
					alert(\"This is javascript\");
					function validateform(){  
						var fname = document.getElementById(\"fname\").value;  
						var lname = document.getElementById(\"lname\").value;
						var password = document.getElementById(\"password\").value;
						
						
						if (fname==null || fname==\"\" || lname==null || lname==\"\"){  
						  alert(\"Name cant be blank.\");  
						  return false;  
						}else if(password.length<6){  
						  alert(\"Password must be atleast 6 characters long.\");  
						  return false;  
						  }  
					}  
					
					function check_pass() {
						if (document.getElementById('password').value ==
								document.getElementById('confirm_password').value) {
							return true;
						} else {
							alert(\"The password entered earlier doesnt match.\");
							return false;
						}
					}
				</script>";
				*/
				/*
				echo "
				<script type=\"text/javascript\">  
					function validateform(){  
						var fname = document.getElementById(\"fname\").value;  
						var lname = document.getElementById(\"lname\").value;
						var password = document.getElementById(\"password\").value;
						
						
						if (fname==null || fname==\"\" || lname==null || lname==\"\"){  
						  alert(\"Name cant be blank.\");  
						  return false;  
						}else if(password.length<6){  
						  alert(\"Password must be atleast 6 characters long.\");  
						  return false;  
						  }  
					}  
					
					function check_pass() {
						if (document.getElementById('password').value ==
								document.getElementById('confirm_password').value) {
							return true;
						} else {
							alert(\"The password entered earlier doesnt match.\");
							return false;
						}
					}
				</script>";
				*/
				echo '
				<script type="text/javascript">  
					function validateform(){  
						var name=document.myform.name.value;  
						var password=document.myform.password.value;  
						  
						if(password.length<6){  
						  alert("Password must be at least 6 characters long.");  
						  return false;  
						  }  
					}  
					
					function check_pass() {
						if (document.getElementById(\'password\').value ==
								document.getElementById(\'confirm_password\').value) {
							return true;
						} else {
							alert("The password entered earlier doesnt match.");
							return false;
						}
					}
				</script> ';
				$server = "localhost";
				$user = "root";
				$pwd = "";
				$db = "GET_WELL_HOSPITAL";
				$conn = new mysqli($server,$user,$pwd,$db);
				
				$fname1 = $_POST['fname'];
				$lname1 = $_POST['lname'];
				$username1 = $_POST['uname'];
				$pwd1 = $_POST['password'];
				$contact1 = $_POST['mobile'];
				$bg1 = $_POST['bg'];
				$rh1 = $_POST['rh'];
				$gender1 = $_POST['gender'];
				$country1 = $_POST['country'];
				
				$sql = "INSERT INTO patient (username,first_name,last_name,password,contact,gender,blood_group,rh_factor,country)
			    		VALUES('$username1','$fname1','$lname1','$pwd1','$contact1','$gender1','$bg1','$rh1','$country1')";
				
				if($conn ->query($sql)=== TRUE)
					{
						echo'<script type="text/javascript">
							alert("Successfully Signed Up!"); 
							window.location = "http://localhost/Hospital%20Website/Hospital.php"
						</script>';
					}
				else
					{
						echo"<script type=\"text/javascript\"> 
							alert(\"Username already exists\");
						</script>";
					}
				
				mysqli_close($conn);
				
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