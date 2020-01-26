<html>
<head>
	<style type="text/css">
		form {
			border : 2px solid white;
			border-sizing : border-box;
			padding : 10px;
			width : 600px;
			position : absolute;
			top : 20px;
			left : 20%;
		}
		
		#image {
			position : absolute;
			left : 700px;
			top : 35px;
		}
		
		h2 {
			font-family : cursive;
		}
		
		body {
			background-image : url(background.jpg);
			<!--background-repeat : no-repeat;-->
			background-size : cover;
			font-size : 20px;
		}
		
		html{
			height : 100%;
			width : 100%;
		}
		
		input[type=text]{
			padding : 10px;
			text-transform : capitalize;
			font-size : 20px;
		}
		
		input[type=password]{
			padding : 10px;
			font-size : 20px;
		}
		
		input[type=number]{
			padding : 10px;
			font-size : 15px;
		}
		
		input[type=radio]{
			transform : scale(1);
		}
		
		#sub {
			padding : 5px;
			font-size : 15px;
		}
		
	</style>
</head>
<body>
	<div id="image"><img src="hospital_logo.jpg" height="150" width="150"/></div>
	<form method="post">
		<h2>Sign Up Here!</h2>
		
	    <fieldset style="width:100px; border-color: white;">
		<legend>Upload your PhotoGraph</legend><br/>

		Photo: <input type="file" accept="image/*" onchange="loadFile(event)" name="photo" style="padding : 5px; font-size : 15px" required /><br/><br/>
		<img id="output" height="250" width="300"/>
		</fieldset>
		<br/>
		<h4>Patient details</h4>
		<input type="text" name="fname" placeholder="Enter your First Name" required /> &nbsp &nbsp
		<input type="text" name="lname" placeholder="Enter your Last Name" required /><br/><br/>
		<input type="text" name="uname" placeholder="Enter your username" required /> &nbsp &nbsp
		<input type="password" name="pword" placeholder="Enter your password" required /><br/><br/>
		<!--<input type="text" name="mname" placeholder="Enter your Middle Name" required /><br/><br/>-->
		Male <input type="radio" name="gender" required /> 
		Female <input type="radio" name="gender" required />
		Other <input type="radio" name="gender" required /> <br/><br/>
		DOB &nbsp &nbsp <input type="date" name="dob" placeholder="Enter your date of birth" style="padding : 8px; font-size : 15px;" required /> &nbsp &nbsp
		Age &nbsp &nbsp <input type="number" name="age" placeholder="Enter your Age" size="4"required /><br/><br/>
		Country  &nbsp
		<select style="padding: 8px; font-size : 15px;">
			<option value="in">India</option>
			<option value="usa">United States Of America</option>
			<option value="uk">United Kingdom</option>
			<option value="pak">Pakistan</option>
			<option value="afg">Afghanistan</option>
			<option value="aus">Australia</option>
			<option value="nz">New Zealand</option>
			<option value="ca">Canada</option>
			<option value="sg">Singapore</option>
			<option value="hkg">HongKong</option>
			<option value="bra">Brazil</option>
			<option value="arg">Argentina</option>
			<option value="fra">France</option>
			<option value="ger">Germany</option>
			<option value="uae">United Arab Emirates</option>
			<option value="rus">Russia</option>
			<option value="ch">China</option>
			<option value="spa">Spain</option>
			<option value="ph">Phillipines</option>
			<option value="sri">Sri Lanka</option>
			<option value="thai">Thailand</option>
			<option value="sa">South Africa</option>
			<option value="ken">Kenya</option>
			<option value="egy">Egypt</option>
			<option value="isr">Israel</option>
		</select>
		<br/><br/>
		
		<input type="submit" name="submit" value="Submit!" id="sub">
		
		<script>
			  var loadFile = function(event) {
					var output = document.getElementById('output');
					output.src = URL.createObjectURL(event.target.files[0]);
			  };
		</script>
		
	</form>
	
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
				$pwd1 = $_POST['pword'];
				
				$sql = "INSERT INTO Sign_Up(first_name,last_name,username,password)
			    VALUES('$fname1','$lname1','$username1','$pwd1')";
				
				if($conn->query($sql)===TRUE)
					{
						echo "Values inserted successfully";
					}
				else
					{
						echo "Values inserted unsuccessful";
					}
				
				mysqli_close($conn);
				
			}	
	?>
	
</body>
</html>






















