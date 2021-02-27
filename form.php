<?php
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	if (!empty($email)) {
		echo '<h3 class="success">We will get back to you soon<br/>Thank You!</h3>';
		header("Refresh:2; url=index.html"); 
	}else{
		echo '<h3 class="fail">Field is empty!</h3>';
		header("Refresh:2; url=index.html"); 
	}
} 
?>