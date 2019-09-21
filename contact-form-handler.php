<?php
    $name = $_POST['NAME'];
    $visitor_email = $_POST['EMAIL'];
    $contct = $_POST['CONTACT'];
    $message = $_POST['MESSAGE'];

    $email_from = 'dhavalpatel563@yahoo.com';

    $email_subject = "New Form Submited";

    $email_body = "User Name $NAME.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $MESSAGE.\n";



?>