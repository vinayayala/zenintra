<?php
//get data from form  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$fcandi = $_POST['f-candi'];
$lcandi = $_POST['l-candy'];
$email= $_POST['candi-m'];
$phone= $_POST['candi-p'];
$jobs= $_POST['jobs'];
$resume= $_POST['resume'];

$to = "ayalavinay@gmail.com";
$subject = "Mail From Zen Strategies";

$txt ="First Name = ". $fname . "\r\n  Last Name = " . $lname . 
    "\r\n  Firt Name of Candidate = " . $fcandi .
    "\r\n  Last Name of Candidate = " . $lcandi .  
    "\r\n  Email = " . $email . 
    "\r\n Phone Number =" . $phone .
    "\r\n Potential Job =" . $jobs . 
    "\r\n Resume =" . $resume;

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
echo "<h1>Thank You! We received your info.</h1>";

?>