<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="login-holder">
            <h3 class="welcome-title">Welcome back,</h3>
            <p class="lead">Sign in to your account to continue</p>
            <div class="login-container">

                        
                <div class="logo_card">
                    <img src="download.jpg" alt="Card Logo">
                </div>

                    <?php if (isset($_GET['error_msg'])) { ?>
                    <div class="error-control-box">
                        <p class="error-msg"><?php echo $_GET['error_msg']; ?></p>
                    </div>
                    <?php } else { ?>
                        <div class="error-control-box" style="display: none">>
                        </div>

                    <?php } ?>


                <!-- <h2>Log In</h2> -->

                <form action="login.php" method="post" id="myForm">

                    <div class="form-control">
                        <label for="user_name">Username</label>
                        <input type="text" id="user_name" name="user_name" placeholder="Enter Username">
                        <div class="error"><small></small></div>
                    </div>

                    <div class="form-control">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Enter Password">
                        <div class="error"><small></small></div>
                    </div>

                    <div class="form-control">
                        <input type="submit" value="Sign In" id="submit_btn">
                    </div>

                    <div class="form-control">
                        <p><a href="#">Forgot Password?</a></p>
                    </div>


                </form>


            </div>
        </div>
    </div>


    <script src="validation.js"></script>

</body>
</html>