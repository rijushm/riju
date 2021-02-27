<!DOCTYPE html>
<html>
<head>
	<title>Under Construction</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="jarallax.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<body>

	<header>
		<div class="logoBox">
			<h2>iam<span>Riju</span></h2>
		</div>
		<div class="navBtn">
			<a href="index.html">Home</a>
		</div>
	</header>

	<section>
		<div class="row">
			<div class="col-6">
				<div class="con">
					<h2 data-jarallax-element="-100 0">My New Website is on the way</h2>
					<form action="" method="post">
						<input type="email" name="email" placeholder="Enter your email">
						<input type="submit" name="submit" value="Notify">
					</form>

					<?php
					if(isset($_POST['submit'])){
						$email = $_POST['email'];
						if (!empty($email)) {
							echo '<h3 class="success">We will get back to you soon<br/>Thank You!</h3>';
						}else{
							echo '<h3 class="fail">Field is empty!</h3>';
						}
					} 
					?>

					<div class="social">
						<a href="https://github.com/rijushm"><i class="fab fa-github"></i></a>
						<a href="https://www.linkedin.com/in/rijusharma1"><i class="fab fa-linkedin"></i></a>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="imgBox jarallax">
					<img src="img/1.jpg" class="jarallax-img">
				</div>
			</div>
		</div>
	</section>

	<footer>
		<p>@ 2021 By Riju Sharma</p>
	</footer>

	<script src="jarallax.js"></script>
	<script src="jarallax-element.js"></script>

	<script type="text/javascript">
		jarallax(document.querySelectorAll('.jarallax'), {
		    speed: 0.8
		});
	</script>

</body>
</html>