<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favicon_CV.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Alegreya+Sans:300");

		body {
			font: 300 50px/1 Alegreya Sans, monospace;
		}

		hr {
			width: 100%;
			color: black;
		}

		h2 {
			text-align: center;
			font-weight: 600;
			color: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="header">
			<h2>C.V / Resume</h2>
			<hr>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<h3 style="font-size: 40px;font-weight: 600;">Introduction: </h3>
				<br>
				<h3><b>NAME:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $_POST["fullname"]; ?> </h3><br>
				<h3><b>MOBILE NUMBER:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $_POST["mobile"]; ?></h3><br>
				<h3><b>EMAIL ID:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $_POST["email"]; ?></h3><br>
				<hr>
				<br>
				<h3 style="font-size: 40px;font-weight: 600;">Qualifiations: </h3>
				<br>
				<h3> <?php echo $_POST["qua"]; ?></h3><br>
				<hr><br>
				<!-- <h3 style="font-size: 40px;font-weight: 600;">Stuff Done and Qualities: </h3>
				<br>
				<ul type="round">
					<li><h3 style="font-size: 30px;">Fluent in HTML & CSS, Beginner level in JS, jQuery, Ruby on Rails </h3></li>
					<li><h3 style="font-size: 30px;">I was selected as a volunteer for Aparoksha this year (2017) </h3></li>
					<li><h3 style="font-size: 30px;">Contributed to the Official Aparoksha webiste, made the Team page</h3></li>
					<li><h3 style="font-size: 30px;">For more insight on my small projects I tried : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="https://codhek.github.io/Selfie/">https://codhek.github.io/Selfie/ </a></h3></li>
				</ul> -->
				<br>
				<hr>
				<!-- <h3 style="font-size: 40px;font-weight: 600;">Languages I want to Learn: </h3><br>
				<ul type="round">
					<li style="font-size: 30px;">NodeJS, ExpressJS, Python, P5 JS</li>
				</ul>
				<br>
				<hr>
				<h3 style="font-size: 40px;font-weight: 600;">Connect with me: </h3><br>
				<h3><b>GitHub:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://github.com/CodHeK">https://github.com/CodHeK</a></h3><br>
				<h3><b>Facebook:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="https://www.facebook.com/GaganGanapathyAs">https://www.facebook.com/GaganGanapathyAs</a></h3><br>
				<h3><b>Twitter:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Add your link</h3><br>
				<hr>
			</div>
			<div class="col-lg-3">
			<div class="thumbnail">
				<img src="myPic.JPG" alt="Your photo">
			</div>
			</div> -->
		</div>
		
	</div>
</body>
</html>