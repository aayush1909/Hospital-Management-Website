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
			background-color : white;
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
		


		.box{
			margin-left: 250px;
		}

		.text{
			padding-left: 180px;
			margin-left: 50px;
			padding-bottom: 25px;
			border-style: solid;
			border-color: #11b0f9;
			border-width: 2px;
			width: 500px;
		}

		.image{
			position: absolute;
			border-style: solid;
			border-color: #11b0f9;
			border-width: 2px;
			margin-top: 30px;
		}

		.mySlides {
			display:none;
		}

	</style>
</head>

<body>
	<img src="hospital_logo.jpg" style="position: relative; height: 75px; width: 75px; padding:5px; top : 5px; left : 5px;"/> &nbsp &nbsp
	<span style="font-size: 40px; position:absolute; top:25px;">Get Well Hospital</span>
	<span style="position: absolute; left: 45%;top: 20px;font-size: 22px;">For Emergency : &nbsp &nbsp &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 45%;top: 50px;font-size: 22px;">For Appointments : &nbsp +91-22-66668888</span>
	<span style="position: absolute; left: 45%;top: 80px;font-size: 22px;">Board Line : &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp +91-22-66668888</span>
	<button style="position:absolute; left: 78%; top: 30px; font-size: 25px; padding: 5px;border-radius: 10px;width: 130px;background-color: #01b224;border: none;"><a href="http://localhost/Hospital%20Website/signup.php" title="Haven't signed up yet?"><span style="color: white;">Sign Up</span></a></button>
	<button style="position:absolute; left: 90%; top: 30px; font-size: 25px; padding: 5px;border-radius: 10px;width: 100px;background-color: #01b224;border: none;"><a href="http://localhost/Hospital%20Website/login.php" title="Click here to Login"><span style="color: white;">Login</span></a></button><br /><br />
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

	<br><br><br>
	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/581c9d4b1d4f4Dr_Bejoy_Abraham.jpg&amp;w=200&amp;h=200&amp;a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Bejoy Abraham</h1> 
		<span style="color: #076af4;"> MBBS, MS, DNB, MCh, DNB, FRCS<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Transplant/Kidney Transplant, Urology
		<h3 style="color: #076af4;">Expertise</h3>
		Renal Transplant, Uro Oncology, Robotic Surgery
		</div>	
	</div>
	<br><br><br>


	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/581c9f3cadf82Dr_Subhash_Agal.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Subhash Agal</h1> 
		<span style="color: #076af4;"> MD, DNB (Gastro)<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Gastroenterology
		<h3 style="color: #076af4;">Expertise</h3>
		All kinds of interventional gastro-intestinal endoscopies, capsule endoscopies, enteroscopies and fibroscan of liver.
		High level of skill in diagnosis and treatment of all kinds of gastrointestinal, gall bladder and biliary, pancreatic and liver disorders.
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/581c9d1d563d2Dr_Annu_Agrawal.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Annu Aggarwal</h1> 
		<span style="color: #076af4;"> MBBS, MD (Gen Medicine), DNB (Neurology), MRCP (UK)<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Neurosciences/Neurology, Dermatology, Internal Medicine, Gynaecology & Obstetrics, Reproductive Endocrinology & Fertility
		<h3 style="color: #076af4;">Expertise</h3>
		Cognitive and Behavioural Neurology, Neurology
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/581c46b5e8856Dr_Quazi_Ahmad.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Quazi Ahmad</h1> 
		<span style="color: #076af4;"> MBBS, MS (Surgery), DNB (Surgery), MRCS (EDINBURGH), MCh (Plastic Surgery), MNAMS<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Plastic & Reconstructive Surgery
		<h3 style="color: #076af4;">Expertise</h3>
		Invasive cosmetology & Dermatology
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/581c9efbecf00Dr_Shaunak_Ajinkya.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Shaunak Ajinkya</h1> 
		<span style="color: #076af4;"> MD, DPM, DIP, ADPSc, PGDMLS, CHt, FCLR, DHA<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Psychiatry
		<h3 style="color: #076af4;">Expertise</h3>
		Psychiatry, Psychotherapy, Clinical Hypnotherapy
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/58107997e4140Dr_Sanjiv_Bhadhwar.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Sanjiv Badhwar</h1> 
		<span style="color: #076af4;"> MS<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Robotic Surgery , ENT
		<h3 style="color: #076af4;">Expertise</h3>
		ENT - Head Neck Surgery
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/5810771d2258fDr_Chinmaya_Bhave.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Chinmaya Bhave</h1> 
		<span style="color: #076af4;"> M.B.B.S., D.N.B. Anaesthesiology<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Anaesthesiology
		<h3 style="color: #076af4;">Expertise</h3>
		Neuroanaesthesiology
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/581c46a0039f1Dr_Prashant_Bobhate.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Prashant Bhobhate</h1> 
		<span style="color: #076af4;"> MD-(Pediatrics), FNB (Pediatrics Cardio)<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Children's Heart
		<h3 style="color: #076af4;">Expertise</h3>
		Diagnosis and treatment of children with congenital heart disease, Special interest in fetal echocardiogram and pulmonary hypertension.
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/582d6bc769b31Dr_Ashutosh_Chauhan.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Ashutosh Chauhan</h1> 
		<span style="color: #076af4;"> MBBS, MS (Gen Surgery), ACS, FASTS<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Transplant /Liver Transplant , Hepato Pancreato Biliary
		<h3 style="color: #076af4;">Expertise</h3>
		Hepatobiliary Surgery & Liver Transplant.
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/580f4b123eb68Dr_Rolly_Chowdhri.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Rolly Chowdhri</h1> 
		<span style="color: #076af4;"> M.D. Radiology<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Radiology
		<h3 style="color: #076af4;">Expertise</h3>
		General Ultrasound and Musculoskeletal Ultrasound
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/Dr.Jamshed_Dalal.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Jamshed Dalal</h1> 
		<span style="color: #076af4;"> MBBS, MD (Gen Medicine), DM (Cardiology), PhD (Cardiology), FESC, FRCP (London)<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Cardiac Sciences /Cardiology
		<h3 style="color: #076af4;">Expertise</h3>
		Adult Interventional Cardiology
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/58ae793691a8dDr.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Barnali Das</h1> 
		<span style="color: #076af4;"> MBBS, MD, DNB (Medical Biochemistry), CCCR (Clinical Research), PGDHHM (Hospital & Health Care Management), Green Belt (Six Sigma)<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Laboratory Medicine
		<h3 style="color: #076af4;">Expertise</h3>
		Clinical Chemistry, Immunology, Autoimmune Markers, Endocrinology, Standardization & Harmonization of Immuno assays, Laboratory Quality Management, Lean Six Sigma in Hospital & Diagnostic Sector.
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/5810769e1c3c0Dr_Avinash_Date.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Avinash Date</h1> 
		<span style="color: #076af4;"> M.S.(Orth), DNB (Orth), MRCS(Edinburgh) , FRCS (T&O), Diploma in Health Administration<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Bone & Joint /Orthopaedics
		<h3 style="color: #076af4;">Expertise</h3>
		Knee and Hip Arthroplasty (Joint Replacement), Complex primary and Revision joint replacement surgeries.
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/5810787ccba95Dr_Puja_Dewan.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Puja Dewan</h1> 
		<span style="color: #076af4;"> MBBS, DGO, DNB, MRCOG (UK), DHA, DMLS, MNAMS, FIMSA, FICMCH, FMIS, FRSH (UK)<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Mother & Child , Gynaecology & Obstetrics , Reproductive Endocrinology & Fertility
		<h3 style="color: #076af4;">Expertise</h3>
		Infertility, Reproductive Endocrinology & Adolescent Gynaecology, Gynae Laparoscopy, Gynae Ultrasonology [3D], High Risk Obstetrics, Premarital-Preconception Counselling, Preventive Oncology
		</div>	
	</div>
	<br><br><br>

	<div class="box">
		<div class="image"><img src="http://www.kokilabenhospital.com/timthumb2.php?src=http://kdahweb-static.kokilabenhospital.com/kdah-admin2016/product/5887324e5c9c0Dr.-Niren-Dongre-new.jpg&w=200&h=200&a=t">
		</div>
		<div class="text">
		<h1 style="color: #076af4;">Dr. Niren Dongre</h1> 
		<span style="color: #076af4;"> MBBS, DO, DNB,FMRF<br /></span>
		<h3 style="color: #076af4;">Department </h3>
		Opthalmology
		<h3 style="color: #076af4;">Expertise</h3>
		Retinal Diseases
		</div>	
	</div>
	<br><br><br>
	</div>

	
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