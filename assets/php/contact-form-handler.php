<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'inquiries@ThePlayerZero.com';

    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n"<div class=""
                    "User Email: $visitor_email.\n".
                        "User MEssage: $message.\n";

        $to = "Zachary@ThePlayerZero.com";

        $headers = "From" $email_from \r\n";

        $headers = "Reply-To: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: Contact.html");

?>