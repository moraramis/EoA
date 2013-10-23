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

//$contentPage = 'form';
$user = NULL;
//My Secured Session start that calls out a function i've set up in authView.php
sec_session_start();

//My if conditional that will display the success.inc page if log in was successful
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
                        <img src="img/logo.png" class="logo" height="267" width="400" alt ="Essence of Awesome Logo">
                            <div class="right_form"  style="margin-top: 1%; width: 50% ">
                                <!-- <input type="text" contenteditable="true" value="Search"> -->
                                <p class="wb">Welcome Back, <?php  echo htmlentities($data["username"]); ?></p>
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
        }else{
        $view->show('form', '');
        //$view->show($contentPage, $user);
        }
?>