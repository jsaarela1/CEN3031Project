<?php

    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Gator SubLease Create Account</title>
        <link rel="stylesheet" href="createAccPG.css">
    </head>

    <body>
        <div class="banner">
            <div class="navbar">
                <a href="frontPG.html"><img src="images/logo.png" class="logo"></a>
                <ul>
                    <li><a href="ListingLease.php">List Sublease</a></li>
                    <li><a href="findingLease.php">Find Sublease</a></li>
                </ul>
            </div>
            <div class="createbox">
                <img src="images/icon.png" class="avatar">
                    <h1>Create an Account</h1>
                    <form action="includes/signup.inc.php" method="post">
                        <p>First Name</p>
                        <input type="text" name="nameFirst" placeholder="Jacob">
                        <p>Last Name</p>
                        <input type="text" name="nameLast" placeholder="Saarela">
                        <p>UF Email</p>
                        <input type="text" name="email" placeholder="FloridGator@ufl.edu">
                        <p>Valid UFID (8 digits)</p>
                        <input type="text" name="ufid" placeholder="XXXXXXXX">

                        <p>Password</p>
                        <input type="password" name="pwd" placeholder="Enter Password">
                        <input type="password" name="pwdrepeat" placeholder="Re-enter Password">
                        
                        <!--<button type="submit" name="submit"> Create Account </button>  -->
                        <input type="submit" href="loginPG.php" name="submit" value="Create Account">
                        <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"] == "emptyinput"){
                                echo "<p> Fill in all fields!</p>";
                            }else if($_GET["error"] == "InvalidUFID"){
                                echo "<p> Fill in a 8 digit ID!</p>";
                            }else if($_GET["error"] == "PasswordsDontMatch"){
                                echo "<p>Passwords do not match!</p>";
                            }else if($_GET["error"] == "InvalidEmail"){
                                echo "<p> Choose a proper email!</p>";
                            }else if($_GET["error"] == "UFIDisAlreadyRegistered"){
                                echo "<p> This UFID is always Regustered!</p>";
                            }elseif($_GET["error"] == "stmtfailed"){
                                echo "<p> Something went wrong, try again!</p>";
                            }
                            else if($_GET["error"] == "none"){
                                echo "<p> Succesfully signed up!</p>";
                            }
                        }
                    ?>

                        <a href="loginPG.php">Already have an account?</a>
                    </form>

                    <!--Gets all the error codes to prompt users of success sign up-->
            </div>
        </div>


    </body>

</html>