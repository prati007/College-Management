<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>College Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<img src="img/images.jpg" width="800"height="270">
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					FET,Jain University<BR>
					45th km NH - 209 Jakkasandra Post,<BR>
					Kanakapura Rd, Bengaluru, Karnataka 562112<BR>
					Mail - jainuniversity.ac.in<br>Phone - 90430-76890
				</form>
			</div>
		</div>
		<div class="footer">
			<footer><p>Copyright &copy; Batch 8 </p></footer>
		</div>
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>