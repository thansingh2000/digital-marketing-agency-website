 <!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>
			Kamriya Softtech - Website Development | News and Blog Website Development | Digital Marketing | Google Adsense Service 
		</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		
		<!--BOOTSRAP-4-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!--BOOTSRAP-5 CDN-->		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

		<link rel="stylesheet" href="css/style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">	
		
	</head>
	<body >
		<!--site-header-block-->
		<?php
			include('include/header.php');
		?>
		
		<!---site-navigation-block-->
		<?php
			include('include/nav.php');
		?>
		
		
		<div class="jumbotron p-3">
			<div class="container">
				<h4>
					Contact Us
				</h4>
				
				<ul class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="index.php">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="about.php">About</a>
					</li>
					<li class="breadcrumb-item">
						<a href="services.php">Service</a>
					</li>
					<li class="breadcrumb-item">
						<a href="packaged.php">Packedge</a>
					</li>
					<li class="breadcrumb-item active">	
						Contact us
					</li>
				</ul>
				
			</div>
		</div>
		
		<article class="mt-5 contact-new">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="wrapper-head p-2">
							<h3 class="text-center">
								Please let us know if you have any questions.
							</h3>
							<p class="text-center">
								Please do not hesitate to contact me if I can be of any further assistance / provide further information on this matter.
							</p>
						</div>
						
						<div class="mainCBox">
							 <div class="mainForm">
								<h2>Contact Us</h2>
								<form>
									<span id="ErronMsg" style="color:red;"></span>
									<div>
										<label>Name:</label>
										<input type="text"/ id="nameF">
									</div>
									
									<div>
										<label>Mobile:</label>
										<input type="number"/ id="numberF">
									</div>
									
									<div>
										<label>Email:</label>
										<input type="Email"/ id="EmailF">
									</div>
									
									<div>
										<label>Date of Birth:</label>
										<input type="date"/ id="dateF">
									</div>
									
									<div>
										<label>Massage:</label>
										<textarea type="text" id="MassageF"></textarea>
									</div>
									
								</form>
								<div>
										<button id="BookNow" onclick="abc()">Contact Us</button>
									</div>
							 </div>
							 <br>
							 <div class="mainForm">
								<div class="detailsBox">
									<h2>Contact Us </h2>
									<div  class="BtnContact">
										<a href="tel:6263367133" >6263367133</a>
									</div>
									<div  class="BtnContact">
										<a href="tel:6263367133" >6263367133</a>
									</div>
									
									<div  class="BtnContact">
										<a href="#" >kamriya404@gmail.com</a>
									</div>
									
									<div  class="BtnContact">
										<a href="https://goo.gl/maps/f5wvrbhL6zbzbbUy6" target="_blank" >Get Direction</a>
									</div>
									
									<div class="address">
										<p>Kanker Chhattisgarh 494334</p>
									</div>
									
								</div>
							 </div>
						</div> 
					</div>
					<!--col-12-->
					
				</div>
			</div>
		</article>
		
		<?php
			include('include/footer.php');
		?>
		
		  <!-- <script language="JavaScript"> -->
      
       <!-- window.onload = function () { -->
           <!-- document.addEventListener("contextmenu", function (e) { -->
               <!-- e.preventDefault(); -->
           <!-- }, false); -->
           <!-- document.addEventListener("keydown", function (e) { -->
               <!-- //document.onkeydown = function(e) { -->
               <!-- // "I" key -->
               <!-- if (e.ctrlKey && e.shiftKey && e.keyCode == 73) { -->
                   <!-- disabledEvent(e); -->
               <!-- } -->
               <!-- // "J" key -->
               <!-- if (e.ctrlKey && e.shiftKey && e.keyCode == 74) { -->
                   <!-- disabledEvent(e); -->
               <!-- } -->
               <!-- // "S" key + macOS -->
               <!-- if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) { -->
                   <!-- disabledEvent(e); -->
               <!-- } -->
               <!-- // "U" key -->
               <!-- if (e.ctrlKey && e.keyCode == 85) { -->
                   <!-- disabledEvent(e); -->
               <!-- } -->
               <!-- // "F12" key -->
               <!-- if (event.keyCode == 123) { -->
                   <!-- disabledEvent(e); -->
               <!-- } -->
           <!-- }, false); -->
           <!-- function disabledEvent(e) { -->
               <!-- if (e.stopPropagation) { -->
                   <!-- e.stopPropagation(); -->
               <!-- } else if (window.event) { -->
                   <!-- window.event.cancelBubble = true; -->
               <!-- } -->
               <!-- e.preventDefault(); -->
               <!-- return false; -->
           <!-- } -->
       <!-- } -->
		<!-- // //edit: removed ";" from last "}" because of javascript error -->
		<!-- </script> -->
		<script src="include/contact.js"></script>
	</body>
</html>