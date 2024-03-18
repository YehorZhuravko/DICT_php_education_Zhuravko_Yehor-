<?php
$subject = 'New Email';
$firstName = 'Yehor';
$secondName = 'Zhuravko';
$email = 'y.a.zhuravko@student.khai.edu';

echo $subject . "\n";
echo $firstName . "\n";
echo $secondName . "\n";
echo $email . "\n";

$text1 = "Hello" . "\n";
$text2 = "Full Name :($firstName)";
$text3 = "($secondName)" . "\n";
$text4 = "email : ($email)" . "\n";
$message = $text1.$text2.$text3.$text4;

echo "message: \n" . $message;
$additional_headers = 'From: y.a.zhuravko@student.khai.edu';

mail($email,$subject,$message,$additional_headers);