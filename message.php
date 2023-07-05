<?php
  $firstName = $_POST['FirstName'];
  $lastName = $_POST['LastName'];
  $email = $_POST['Email'];
  $message = $_POST['Message'];

  $receiver = "othmantahiri9@gmail.com";
  $subject = "from : $lastName $firstName <$email>";
  $body = "Name : $lastName $firstName\nEmail: $email\nMessage: $message";
  $sender = "From : $email";
  if(mail($receiver,$subject,$body,$sender)){
    echo "Your message has been sent";
  }
  else{
    echo "Sorry, failed to send your message";
  }
?> 