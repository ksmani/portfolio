<?php

    $ name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $Message = $_POST['Message'];

    $email_from = 'ksmani-portfolio.web.app';
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name./n".
                    "User Email: $Visitor_email./n".
                    "User Message: $Message./n";


   $to = "ksmani91@gmail.com/";

  $headers = "From: $email_from /r/n";

  $headers . = "Reply-To: $Visitors_email /r/n";

  mail ($to,email_Subject,$email_body,$headers);

 header("Location: index.html");
?>
