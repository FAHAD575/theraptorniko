<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';


try {
	if (isset($_POST["send_mail_btn"])) {
		$mail = new PHPMailer(true);
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'TheRaptorNiko@gmail.com';
		$mail->Password = 'mghdcqpjxhkdqeou';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->setFrom($_POST["email"]);
		$mail->addAddress($_POST["email"]);
		$mail->isHTML(true);
		$mail->Subject = 'Subject of the Email';
		$current_time = date('h:i A', strtotime($_POST["time"]));
		$mail->Body = "
		<strong>" . $_POST["fname"] . " " . $_POST["lname"] . "</strong>
		<p style='marging:0px 0 5px 0'>" . $_POST["PhoneNumber"] . "</p>
		<p style='marging:0px 0 5px 0'>" . $_POST["email"] . "</h1>
		<p style='marging:0px 0 5px 0'>" . $_POST["NameOfOrganization"] . "</p>
		<p style='marging:1.5rem 0'>" . $_POST["details"] . "</p>
		<p style='marging:1.5rem 0'>" . $_POST["date"] . "</p>
		<p style='marging:1.5rem 0'>".$current_time."</p>
		<p style='marging:0px 0 5px 0'>" . $_POST["WhatYouNeed"] . "</p>
		<p style='marging:0px 0 5px 0'>" . $_POST["Additional_Info"] . "</p>";
		$mail->send();
		echo "<script>
		localStorage.setItem('message','Mail has been successfully deliverd');
		document.location.href = 'form6.html';
		</script>";
		exit();
	}
} catch (Exception $e) {
		echo "<script>
		localStorage.setItem('message','An error occurred.Please fill all fields');
		document.location.href = 'form2.html';
		</script>";
		exit();
}
