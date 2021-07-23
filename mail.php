<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$project=$_POST['project'];
$message= $_POST['message'];
$to = "shantanu9617@gmail.com";
$subject = "Mail From Portfolio";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Project = " . $project ."\r\n Message =" . $message ;
$headers = "From: noreply@portfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>