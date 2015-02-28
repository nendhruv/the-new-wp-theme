
<?php

$mail = $_POST['mail'];
$client_email = $_POST['client_email'];
$subject = 'Refer mail';
$email = 'nendhruv@yahoo.com';
$message = $_POST['message'];
$headers = 'Cc:'  .$client_email.  "\r\n";

$body = "I " .$mail. " has reffered " .$client_email. "to Avyam Technlogies regarding " .$message. ".";
//ini_set("SMTP","aspmx.l.google.com");

$sent = mail($email,$subject,$body, $headers);

if($sent){
header('Location: http://www.avyaminnovate.com/ ');
exit();
}

else{
echo "error";
}

?>



