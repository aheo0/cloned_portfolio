<?php
/*
// Validate
$errors = '';
$myemail = 'apollobest03@gmail.com';
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

// Send email
if( empty($errors))

{
$to = $myemail;
$email_subject = "Online Portfolio Contact Form Submission: $name";

$email_body = "There was a submission with ".
"Data:\n Name: $name \n ".
"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";
$headers .= "Reply-To: $email_address";
*/

mail("apollobest03@gmail.com","subject","email_body");

header('Location: contacts_thank_you.html#Form');
//}

?>