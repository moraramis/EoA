<?php
require_once "views/authView.php";
session_name("MyLogin");
sec_session_start();
session_destroy();

if($_GET['login'] == "failed") {
print $_GET['cause'];
}
?>

<div class="row">
                    <div class="small-12 columns">
                        <div class="row">
                            <img src="img/logo.png" class="logo" height="267" width="400" alt ="Essence of Awesome Logo" style="margin-left: 10%; margin-bottom: -7%; margin-top: -3%">
                            <div class="right_form"  style=" margin-top: 10%; margin-right: 1.5%; margin-bottom: -3%">
                            	<!-- Table Based 1 Row Login Form -->
                            <form name="login_form" method="post" action="log.php?action=login">
                                    <table width="100%" border="0" style="border-style: solid; border-width: 1px;border-color: #d9d9d9;">
                                        <tr>
                                            <td><label for="username">Username</label>
    	                                        <input type="text" name="user" id="user"></td>
                                            <td><label for="password">Password</label>
    	                                        <input type="password" name="pwd" "id="userPassword"></td>
                                            <td><input class="button round small" type="submit" value="Go!" style="margin-top: 5px; margin-bottom: auto"></td>
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

