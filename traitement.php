<?php

$data= array_map('trim', $_POST);


$lastname = htmlentities($data['lastname']);
$firstname = htmlentities($data['firstname']);
$email = htmlentities($data['Email']);
$phoneNumber = htmlentities($data['phoneNumber']);
$subject = $data['subject'];
$message = htmlentities($data['message']);

$display= "";

if (empty($firstname)) {
    $display = 'The firstname is mandatory';
 } 
 else if (empty($lastname)){
    $display = 'The lastname is mandatory';
 }
else if (empty($email)) {
    $display = 'The Email is mandatory';
 }
 else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $display = 'L\'adresse mail n’est pas au bon format.';
  }
else if (empty($phoneNumber)) {
    $display = 'The phoneNumber is mandatory';
  }
  else if (empty($subject)) {
    $display = 'The subject is mandatory';
  }
  else if (empty($message)) {
    $display = 'The subject is mandatory';
  } else {
 
  echo "Merci $firstname $lastname de nous avoir contacté au sujet de $subject. 
  Nous vous recontacterons par mail à $email ou par telephone au $phoneNumber. 
  Votre message : $message.";
}
