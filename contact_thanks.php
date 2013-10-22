<?php
require_once "views/authView.php";
include ('views/header.inc');
//sec_session_start(); 
?>
<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <META http-equiv="refresh" content="10;URL=index.php">
    <title>About Us | EoA</title>

    <link rel="stylesheet" href="css/foundation.css">

    <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
    <div class="row">
        <img src="img/logo.png" alt="Essence of Awesome Logo" style="margin-left: 25%">
        <h2 style="text-align: center">Thank You!</h2>
        <div class="panel" style="width: 80%; text-align: center; margin-left: 10%" >
            <p>Thank you for contacting the most Awesome Ice Cream company in the world! Your input is very important to us, and we will get back to you as soon as we can. In the mean time, we will redirect you back to the main page so you can discover the Essence of Awesome for yourself.</p>
            <p>You will be sent back to the main page in 10 seconds, or click <a href="index.php"><strong>Here</strong></a> to go there right now.</p>
        </div>
</body>

<?php
    include('views/footer.inc');
?>