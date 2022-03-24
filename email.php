<?php
//get data from form
$Name = $_POST['name'];
$Email= $_POST['email'];
$Phone= $_POST['phone'];
$state= $_POST['state'];
$country= $_POST['country'];
$Message= $_POST['message'];
$to = "sumedhmohod72@gmail.com";
$Subject = "Mail From website";
$txt ="Name = ". $Name . "\r\n  Email = " . $Email . "\r\n Message =" . $Message . "\r\n mobile =" . $Phone . "\r\n subject name =" . $Subject;
$headers = "From: vivekdeshmukh1214@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$Subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>