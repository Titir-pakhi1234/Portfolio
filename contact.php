<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $num = $_POST['number'];

  $email_from = "hello@modestcreate.com";
  $email_subject = "New form submission";
  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Phone no.: $num.\n".
                "User Message: $message.\n";

  $to = "hello@modestcreate.com";
  $headers = "From: $email_from \r\n";

  mail($to, $email_subject, $email_body, $headers );
  header("Location: index.html");
 ?>
