<?php

if (isset($_POST['submit'])) {
	$name = $_POST ['name'];
	$subject = $_POST ['subject'];
	$mailFrom = $_POST ['mail'];
	$message = $_POST ['message'];

	$mailTo = "cdd59@georgetown.edu"
	$headers = "From: Cory's Website"
	$txt = "You have a new email from" .$name. ".\n\n".$message;


	mail($mailto, $subject, $txt);

}