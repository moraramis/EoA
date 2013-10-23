<?php
    //Buffer output so we dont get a header error
    ob_start();

    require_once('db.php');
    require_once('views/authView.php');
    require_once('model/authModel.php');

    $view = new AuthView();
    $view->show('header');

    $fields = array(
        'userName'=>'User Name',
        'firstName'=>'First Name',
        'lastName'=>'Last Name',
        'email'=>'Email',
    );

    if(isset($_POST['submit'])){

        $values = array();
        $userPassword1 = MD5($_POST["userPassword1"]);
        $userPassword2 = MD5($_POST["userPassword2"]);

            //For each of the fields we want, check if the field was posted, and if so trim it and use it. Otherwise use NULL.
            foreach($fields AS $field=>$label){
                $values[$field] = isset($_POST[$field]) ? trim($_POST[$field]) : NULL;
            }
            $errors = array();
            /*Title and Platform are required. strlen will return the string's length */
            if(!isset($values['userName']) || !strlen($values['userName'])){
                $errors['userName'] = 'Please Enter a User Name';
            }
            if(!isset($values['email']) || !strlen($values['email'])){
                $errors['email'] = 'Please Enter an Email address';
            }

            //If there are any errors, display the form again. Otherwise, insert the data
            if(!count($errors)){
                $sql = "INSERT INTO users(userName, firstName, lastName, email)
                  VALUES (?, ?, ?, ?);
                UPDATE users SET userPassword = MD5(CONCAT('userSalt','userPassword1'))";

                $stmt = $db->prepare($sql);

                $result = $stmt->execute(array_values($values));
            }

    }
?>

<?php
    //If the form was submitted and an insert was attempted, display a message.
    if(isset($result)){
        if($result){
            header ("Location: signup_thanks.php");
            exit;
            // echo '<b>Thanks for Signing up  with InterestPoint!</b>';
        }else{
            echo '<b>Unable to Signup for the following reasons: </b>';
            print '<pre>'.print_r($stmt->errorInfo(), true);
        }
    }
?>

<!DOCTYPE html>
    <!--[if IE 8]> <html class="no-js lt-ie9" lang="en" > <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Signup | EoA</title>
        <link rel="stylesheet" href="css/foundation.css">

        <script src="js/vendor/custom.modernizr.js"></script>
    </head>
    <body>
        <div class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-6 columns">
                        <h3>Sign Up</h3>
                    </div>
                </div>
                <!-- Left Column -->
                <div class="row">
                    <div class="large-6 columns">
                        <div class="panel">
                            <form method="post" action="signup.php">

                                <?php
                                    foreach($fields AS $field=>$label){

                                    echo "<label>{$label}:";
                                    //If the field had an error, display it.
                                    if(isset($errors[$field])){
                                    echo ' <span class="error">'.$errors[$field].'</span>';
                                    }
                                    //Echo the actual input. If the form is being displayed with errors, we'll have a value to fill in from the user's previous submission.
                                    echo '<input type="text" name="'.$field.'"';
                                    if(isset($values[$field])){
                                        echo ' value="'.$values[$field].'"';
                                    }
                                    echo '/></label>';
                                    }
                                ?>

                                <p><label for="userPassword1">Type a Password</label>
                                    <input name="userPassword1" type="password"></p>
                                <p> <label for="userPassword2">Re-Type your password</label>
                                    <input name="userPassword2" type="password"></p>
                                <p>By Clicking <b>Sign Up!</b> You Agree to Our <a href="tos_page.php">Terms of Service</a></p>
                                    <input class="button round"type="submit" name="submit" value="Sign Up!" />
                            </form>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="large-6 columns">
                        <h3>Why Join?</h3>
                        <p>When you join the Essence of Awesome Club, you get exclusive access to special deals, such as coupons, shipping discounts, priority flavor production.</p>
                        <p>Registered users of Essence of Awesome can store their most recent mixes for easy re-ordering and shipping.</p>
                        <p>Besides the awesome benefits already listed, our Platinum members get to become our “Flavor-ologists”, and suggest what our next unique and custom Flavor of the Month will be!</p>
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
