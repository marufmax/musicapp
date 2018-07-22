<?php
  include("includes/config.php");
  include("includes/classes/Account.php");
  include("includes/classes/Constants.php");
  $account = new Account($conn);
  include("includes/handlers/registerHandler.php");
  include("includes/handlers/loginHandler.php");

function getInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Music App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/register.css" />
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/register.js"></script>
</head>
<body>
    <?php
    if (isset($_POST['registerButton'])) {
        echo '<script>
                $(document).ready(function () {
                $("#loginForm").hide();
                $("#registerForm").show();
            });
     </script>';
    } else {
         echo '<script>
                $(document).ready(function () {
                $("#loginForm").show();
                $("#registerForm").hide();
            });
        </script>';
    }
    ?>
 <div id="background">
     <div id="loginContainer">
            <div id="inputContainer">
                <form id="loginForm" actions="register.php" method="POST">
                    <h2>Login to your account</h2>
                    <p>
                    <?php echo $account->getError(Constants::$loginFailed); ?>

                    <label for="loginUsername">Username</label>
                    <input id="loginUsername" type="text" value="<?php getInputValue("loginUsername"); ?>" name="loginUsername" placeholder="e.g Maruf Alom" required>
                    </p>
                    <p>
                    <label for="loginPassword">Password</label>
                    <input id="loginPassword" type="password" name="loginPassword" placeholder="******" required>
                    </p>

                    <button class="btn" name="loginButton" type="submit"> Log In </button>

                    <div class="hasAccountText">
                        <span id="hideLogin"> Dont have an any account? Register here </span>
                    </div>
                </form>




                <form id="registerForm" actions="register.php" method="POST">
                    <h2>Create your free account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameCharLen); ?>
                        <?php echo $account->getError(Constants::$usernameTaken); ?>
                        <label for="username">Username</label>
                        <input id="username" type="text" value="<?php getInputValue('username'); ?>" name="username" placeholder="e.g Maruf Alom" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$firstNameCharLen); ?>
                        <label for="firstName">First Name</label>
                        <input id="firstName" value="<?php getInputValue('firstName'); ?>" type="text" name="firstName" placeholder="e.g Maruf" required>
                    </p>
                    <p>
                        <?php echo $account->getError(Constants::$lastNameCharLen); ?>
                        <label for="lastName">Last Name</label>
                        <input id="lastName" type="text" value="<?php getInputValue('lastName'); ?>" name="lastName" placeholder="e.g Alom" required>
                    </p>
                    <p>
                        <?php echo $account->getError(Constants::$emailDoNotMatch); ?>
                        <?php echo $account->getError(Constants::$invalidEmail); ?>
                        <?php echo $account->getError(Constants::$emailTaken); ?>
                        <label for="email">Email</label>
                        <input id="email" type="email" value="<?php getInputValue('email'); ?>" name="email" placeholder="maruf@gmail.com" required>
                    </p>
                    <p>
                        <label for="email2">Confirm Email</label>
                        <input id="email2" type="email" value="<?php getInputValue('email2'); ?>" name="email2" placeholder="maruf@gmail.com" required>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passwordDoNotMatch); ?>
                        <?php echo $account->getError(Constants::$passwordCharLen); ?>
                        <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                        <label for="password">Password</label>
                        <input id="password" value="<?php getInputValue('password'); ?>" type="password" name="password" placeholder="******" required>
                    </p>

                    <p>
                        <label for="password2">Confirm Password</label>
                        <input id="password2" value="<?php getInputValue('password2'); ?>" type="password" name="password2" placeholder="******" required>
                    </p>

                    <div class="hasAccountText">
                        <span id="hideRegister"> Already have an account? Login here. </span>
                    </div>


                    <button class="btn" name="registerButton" type="submit"> Sign Up </button>
                </form>
            </div>
        <div id="loginText">
            <h1>Get great music, right now</h1>
            <h2>Listen to loads of songs for free </h2>
            <ul>
                <li> Discover music you'll love with </li>
                <li> Create your own playlist </li>
                <li> Follow artist to keep up to date </li>
            </ul>
        </div>
    </div>
 </div>
</body>
</html>