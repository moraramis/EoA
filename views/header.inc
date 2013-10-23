<?php
//Bringing in other pages so vars and functions can be used 
require_once "db.php";
require_once "model/authModel.php";
require_once "views/authView.php";

$model = new authModel(MY_DSN, MY_USER, MY_PASS);
$view = new authView();

//Log in 
$username = empty($_POST['userName']) ? '' : strtolower(trim($_POST['userName']));
$password = empty($_POST['userPassword']) ? '' : trim($_POST['userPassword']);

//echo $username.' : '.$password;

$contentPage = 'form';
$user = NULL;
sec_session_start(); 


if (!empty($_SESSION['userInfo'])){
    $contentPage = 'success';
    $user = $_SESSION['userInfo'];
}

if (!empty($username) && !empty($password)) {
    $user = $model->getUserByNamePass($username, $password);
    if (is_array($user)) {
        $contentPage = 'success';
        $_SESSION['userInfo'] = $user;
    }else{

        "Please Log in";
    }
}

    if (isset($_SESSION['userInfo'])){
        echo('
            <div class="row">
                <div class="small-12 columns">
                    <div class="row">
                        <img src="img/logo.png" class="logo" height="267" width="400" alt ="Essence of Awesome Logo" style="margin-left: 10%; margin-bottom: -7%; margin-top: -3%">
                            <div class="right_form"  style="background-color: #f2f2f2; margin-top: 7%; margin-right: 2%; padding-top:1%; padding-left: 2%; border-style: solid; border-width: 1px; border-color: #d9d9d9;">
                                <!-- <input type="text" contenteditable="true" value="Search"> -->
                                <p class="wb">Welcome Back!</p>
                                <p class=logout"><a href="logout.php">Not You? Please Log Out then back in</a></p>
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
            </div>
            ');
        }else{
        
        $view->show($contentPage, $user);

        }
?>