<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "jinju.pulikken@regenteducation.ae";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: jinju.pulikken@regenteducation.ae";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>
