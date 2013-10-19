<?php
    require_once "db.php";
    require_once "model/authModel.php";
    require_once "views/authView.php";

    $model = new authModel(MY_DSN, MY_USER, MY_PASS);
    $view = new authView();

    //Log in 
    $username = empty($_POST['username']) ? '' : strtolower(trim($_POST['username']));
    $password = empty($_POST['password']) ? '' : trim($_POST['password']);

    $form = 'form';
    $user = NULL;

    //My if conditional that will display the success.inc page if log in was successful
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
                            <div class="right_form"  style="margin-top: 1%">
                                <input type="text" contenteditable="true" value="Search">

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
                        </div>
       

    ');   
    else  
        echo('
                <div class="row">
                    <div class="small-12 columns">
                        <div class="row">
                            <img src="img/logo.png" class="logo" height="267" width="400" alt ="Essence of Awesome Logo">
                            <div class="right_form"  style="margin-top: 1%">
                                <input type="text" contenteditable="true" value="Search">
                                <div class="panel1">
                                <form method="post">
                                    <p class="login">Login</p>
                                    <input type="text" width="150" contenteditable="true" value="Username" id="username">
                                    <input type="text" width="150" contenteditable="true" value="Password" id="password">
                                    <input class="button round small" type="button" name="go_login" id="go_login" value="Go!">
                                </form>
                                </div>
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