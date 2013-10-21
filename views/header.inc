<?php

require_once "db.php";
require_once "model/userModel.php";
require_once "/model/authModel.php";
require_once "/views/userView.php";
require_once "/views/authView.php";

$model = new authModel(MY_DSN, MY_USER, MY_PASS);

$model = new userModel(MY_DSN, MY_USER, MY_PASS);
$view = new userView();

sec_session_start();

$user = NULL;

//$contentPage = 'showLocation';


//$view->show('header', '');
//$view->show($contentPage, $user);
//$view->show('footer', '');

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    //This Block of code was carried over from InterestPoint and can be cleaned up before handoff.
    //
    //    <div id="login_form">
    //        <h2>Login</h2>
    //        <p>Please Log in with your username and password below.</p>
    //        <form action ="?" method="POST">
    //            <label for="username">Username:</label><br />
    //            <input type="text" name="username" id="username" maxlength="30" size="20"/><br />
    //            <label for="password">Password:</label><br />
    //            <input type="password" name="password" id="password" maxlength="30" size="20" /><br />
    //            <br />
    //            <input class="button success" type="submit" value="Submit" />
    //        </form>
    //    </div>
    //
    //    <h2>New User?</h2>
    //    <p><a href="signup.php" class="button">Sign Up Here</a> </p> -->
    //
    /////////////////////////////////////////////////////////////////////////////////////////////////

    if (!empty($_SESSION['userInfo'])){
        $form = 'success';
        $user = $_SESSION['userInfo'];
    }

    if (!empty($username) && !empty($password)) {
        $user = $model->getUserByNamePass($username, $password);
        if (is_array($user)) {
            $form = 'success';
        $_SESSION['userInfo'] = $user;
    }else{
        "Please Log in";
        }
    }

    if (isset($_SESSION['userInfo']))
        echo('
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <img src="img/logo.png" class="logo" height="267" width="400" alt ="Essence of Awesome Logo">
                            <div class="right_form"  style="margin-top: 1%; width: 50% ">
                                <!-- <input type="text" contenteditable="true" value="Search"> -->

                                        <p class="wb">Welcome Back, <?php  echo htmlentities($data["username"]); ?></p>
                                        <p class="button small round"><a href="logout.php">Logout</a></p>
                                        </div>
                                     </div>
                                 <hr />
                                <ul class="button-group">
                                    <li><a href="index.php" class="small button">Home</a></li>
                                    <li><a href="customize.php" class="small button">Order/Customize</a></li>
                                    <li><a href="about.php" class="small button">About Us</a></li>
                                    <li><a href="blog.php" class="small button">Blog</a></li>
                                    <li><a href="logout.php" class="small button">Log Out</a></li>
                                </ul>
                            </div>
                        </div>');
    else
        echo('
                <div class="row">
                    <div class="small-12 columns">
                        <div class="row">
                            <img src="img/logo.png" class="logo" height="267" width="400" alt ="Essence of Awesome Logo" style="margin-left: 10%; margin-bottom: -7%; margin-top: -3%">
                            <div class="right_form"  style=" margin-top: 10%; margin-right: 1.5%; margin-bottom: -3%">
                                <!-- <input type="text" contenteditable="true" value="Search"> -->
                                <!-- <div class="panel1"> -->
                                <form action="?" method="post">
                                    <!-- Original Login Form
                                    <p class="login">Login</p>
                                    <label for="username">Username</label>
                                    <input type="text" width="150" contenteditable="true" value="Username" id="username">
                                    <label for="password">Password</label>
                                    <input type="text" width="150" contenteditable="true" value="Password" id="password">
                                    <input class="button round small" type="button" name="go_login" id="go_login" value="Go!"> -->

                                    <!-- Table Based 1 Row Login Form -->
                                    <table width="100%" border="0" style="border-style: solid; border-width: 1px;border-color: #d9d9d9;">
                                        <tr>
                                            <td><label for="username">Username</label>
    	                                        <input type="text" id="username" contenteditable="true"></td>
                                            <td><label for="password">Password</label>
    	                                        <input type="password" id="password" contenteditable="true"></td>
                                            <td><input class="button round small" type="button" name="go_login" id="go_login" value="Go!" style="margin-top: 5px; margin-bottom: auto"></td>
                                        </tr>
                                    </table>
                                </form>
                                <!-- </div> -->
                            </div>
                        </div>
                        <hr />
                        <ul class="button-group">
                            <li><a href="index.php" class="small button">Home</a></li>
                            <li><a href="signup.php" class="small button">Sign Up</a></li>
                            <li><a href="customize.php" class="small button">Order/Customize</a></li>
                            <li><a href="about.php" class="small button">About Us</a></li>
                            <li><a href="blog.php" class="small button">Blog</a></li>
                        </ul>
                    </div>
                </div>
            ');
?>