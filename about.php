<?php 
	require_once "views/authView.php";
	include('views/header.inc');
	//sec_session_start();
?>
<!DOCTYPE html>
    <!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>About Us | EoA</title>

		<link rel="stylesheet" href="css/foundation.css">

		<script src="js/vendor/custom.modernizr.js"></script>

    </head>
	<body>
	    <div class="row">
		    <div class="large-12 columns">
		        <div class="row">
		            <div class="large-5 columns">
		                <h3>About Us</h3>
		            </div>
		        </div>
		        <div class="row">
		            <div class="large-5 columns">
		                <div class="panel">
		                    <img src="img/hq.jpg" alt="Essence of Awesome Headquarters">
		                </div>
		            </div>
		            <div class="large-7 columns">
		                <p>Founded in 2011, Essence of Awesome strives to be the best company in the custom ice cream business.</p>
		                <p>Our sprawling 20,000 square foot facility is both factory, and delivery service. In addition to providing you with home delivery of your favorite ice cream, we also provide our products to your local supermarket.</p>
		                <p>If you have any comments or concerns please head to our <a href="contact.php">Contact Us</a> page. </p>
		            </div>
		        </div>
		    </div>
		</div>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-45121107-1', 'bplaced.net');
            ga('send', 'pageview');

        </script>
    </body>

<?php
	include('views/footer.inc'); 
?>