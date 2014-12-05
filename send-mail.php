<?php

	$ToEmail = 'mail@yourdomain.de';
	$EmailSubject = 'Subject';

	$Header = "From: ".Trim(stripslashes($_POST["input-mail"]))."\r\n";
	$Header .= "Reply-To: ".Trim(stripslashes($_POST["input-mail"]))."\r\n";
	$Header .= "Content-type: text/html; charset=utf-8\r\n";

	$Body = "<b>Name:</b> ".Trim(stripslashes($_POST["input-name"]))."<br>";
	$Body .= "<b>Mail:</b> ".Trim(stripslashes($_POST["input-mail"]))."<br>";
	$Body .= "<b>Message:</b> ".nl2br($_POST["textarea-message"])."<br>";
	
	$success = mail($ToEmail, $EmailSubject, $Body, $Header);

	if ($success){
		 print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.html\">";
	}

	else {
		print "<meta http-equiv=\"refresh\" content=\"0;URL=../index.html\">";
	}

?>