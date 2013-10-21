<?php
/* Subject and Email Variables */

    $subject = 'EoA Contact Form';
    $webMaster = 'moraramis@fullsail.edu';
    $webmaster2 = 'jklug2001@fullsail.edu';

/* Gathering Data Variables */

    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $reason = $_REQUEST['reason'];

    $body =
        "Received from the EoA Bug Checker Form.\n" .
        "\n" .
        "------------------------------------------------------\n" .
        "\nName: $name" .
        "\nEmail: $email" .
        "\nPhone Number: $phone" .
        "\nComments:" .
        "\n     $reason" .
        "\n" ;

    mail($webMaster, $subject, $body, "From: $name");
    mail($webmaster2, $subject, $body, "From: $name");
    header("Location: contact_thanks.html");
?>