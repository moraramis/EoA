<?php
    require_once "views/authView.php"; 
    include('views/header.inc');
    //sec_session_start();
?>

<!DOCTYPE html>
    <!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
	<!--[if gt IE 8]><!-->
    <html class="no-js" lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->

	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Order | EoA</title>
        <link rel="stylesheet" href="css/foundation.css">

		<script src="js/vendor/custom.modernizr.js"></script>

	</head>
	<body onload="">
	    <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-5 columns">
                        <h3>Order</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="large-5 columns">
                        <div class="panel">
                            <h4>Your Details</h4>
                            <form>
                                <label for="name" id="name_label" style="left: auto">Name: </label>
                                <input type="text" contenteditable="true" name="name" id="name">
                                <label for="address" id="address_label" style="left: auto">Address: </label>
                                <input type="text" contenteditable="true" name="address" id="address">
                                <label for="city" id="city_label" style="left: auto">City: </label>
                                <input type="text" contenteditable="true" name="city" id="city">
                                <label for="state" id="state_label" style="left: auto">State: </label>
                                <input type="text" contenteditable="true" name="state" id="state">
                                <label for="zipcode" id="zipcode_label" style="left: auto">Zipcode: </label>
                                <input type="text" contenteditable="true" name="zipcode" id="zipcode">
                                <label for="phone" id="phone_label" style="left: auto">Phone #: </label>
                                <input type="text" contenteditable="true" name="phone" id="phone">
                                <label for="email" id="email_label" style="left: auto">E-Mail:</label>
                                <input type="email" contenteditable="true" name="email" id="email">
                        </div>
                    </div>
                    <div class="large-7 columns">
                        <h4>Billing Information</h4>
                        <label for="creditcard" id="creditcard_label" style="left: auto">Credit Card: </label>
                        <input type="text"name="creditcard" id="creditcard">
                        <div class="large-4 columns">
                            <label for="expdate" style="left: auto">Exp Date</label>
                            <select>
                                <option value="1">January (1)</option>
                                <option value="2">February (2)</option>
                                <option value="3">March (3)</option>
                                <option value="4">April (4)</option>
                                <option value="5">May (5)</option>
                                <option value="6">June (6)</option>
                                <option value="7">July (7)</option>
                                <option value="8">August (8)</option>
                                <option value="9">September (9)</option>
                                <option value="10">October (10)</option>
                                <option value="11">November (11)</option>
                                <option value="12">December (12)</option>
                            </select>
                        </div>
                        <div class="large-3 columns">
                            <label for="expyear" style="left: auto">Year</label>
                            <select>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                            <p class="button round small" onclick="order_validate()">Order!</p>
                            </form>
                            <script src="js/order_validate.js"></script>
                            <label for="total">Total:</label>
                            <div class="panel" style="width: 90%" id="total">$
                            <?php
                                $total = $_GET['tottxt'];
                                echo $total;

                            ?>
                            </div>
                        </div>
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