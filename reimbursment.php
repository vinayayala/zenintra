<?php
//get data from form  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$token= $_POST['ctoken'];
$cost= $_POST['ccost'];
$file1= $_POST['pgrade'];
$file2= $_POST['ppay'];

$to = "ayalavinay@gmail.com";
$subject = "Mail From Zen Strategies";

$txt ="First Name = ". $fname . "\r\n  Last Name = " . $lname . 
    "\r\n Zen Email of Candidate = " . $email .
    "\r\n Course Token: =" . $token .
    "\r\n Course Cost: =" . $cost .
    "\r\n Proof of Course Grade: = " . $file1 .  
    "\r\n Proof of Course Payment: = " . $file2;
    
    

$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

//redirect
echo "<h1>Thank You! We received your info.</h1>";

?>