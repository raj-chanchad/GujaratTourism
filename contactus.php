<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact us</title>
	<link rel="stylesheet" type="text/css" href="css/contactus.css">
</head>
<body>

<?php include "header.php" ?>

	<div class="box">
		<h1>Contat Us</h1>
		<form>
			<div class="form-group">
			    <label>Your Name</label>
			    <input type="text" placeholder="Your Name" required>
			</div>
			<div class="form-group">
			    <label>Your Email</label>
			    <input type="email" placeholder="Your Email" required>
			</div>
			<div class="form-group text1">
			    <label>Message</label>
			    <textarea class="inputTextarea" placeholder="Please write your Message here" required></textarea>
			</div>
			<div class="wrapper">
				<button type="submit" name='submit'>Send</button>
			</div>
		</form>
	</div>
</body>
</html>