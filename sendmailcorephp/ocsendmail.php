<?php 
// print_r($_REQUEST['ocdatetimepicker']);
// exit();
header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
$ocsmfname = $_REQUEST['ocsmfname'];
$ocsmlname = $_REQUEST['ocsmlname'];
$ocsmphoneno = $_REQUEST['ocsmphoneno'];
$ocsmemail = $_REQUEST['ocsmemail'];
$occurcomorgnaname = $_REQUEST['occurcomorgnaname'];
$ocdatetimepicker = $_REQUEST['ocdatetimepicker'];

$to = 'luisamacario@yahoo.com';
$subject = "luisamacario@yahoo.com";
$message = "Rocket received an inquiry from:\r\n";
$message .= $ocsmfname.' '.$ocsmlname."\r\n";
$message .= $ocsmphoneno."\r\n";
$message .= $ocsmemail."\r\n";
$message .= "Company Name:\r\n";
$message .= $occurcomorgnaname."\r\n";
// $headers = 'From: luisamacario@yahoo.com' . "\r\n" .
//     'Reply-To: luisamacario@yahoo.com' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

// Send the email
if (mail($to, $subject, $message)) {
    // echo "Email sent successfully.";
    echo "true";
} else {
    echo "true";
}
exit();