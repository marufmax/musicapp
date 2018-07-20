<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to Music App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
  <div id="inputContainer">
    <form id="loginForm" actions="register.php" method="POST">
    <h2>Login to your account</h2>
    <p>
      <label for="loginUsername">Username</label>
      <input id="loginUsername" type="text" name="loginUsername" placeholder="e.g Maruf Alom" required>
    </p>
    <p>
      <label for="loginPassword">Password</label>
      <input id="loginPassword" type="password" name="loginPassword" placeholder="******" required>
    </p>

    <button class="btn" type="submit"> Log In </button>
    </form>


    <form id="registerForm" actions="register.php" method="POST">
    <h2>Create your free account</h2>
    <p>
      <label for="username">Username</label>
      <input id="username" type="text" name="username" placeholder="e.g Maruf Alom" required>
    </p>

    <p>
      <label for="firstName">First Name</label>
      <input id="firstName" type="text" name="firstName" placeholder="e.g Maruf" required>
    </p>
    <p>
      <label for="lastName">Last Name</label>
      <input id="lastName" type="text" name="lastName" placeholder="e.g Alom" required>
    </p>
    <p>
      <label for="email">Email</label>
      <input id="email" type="email" name="email" placeholder="maruf@gmail.com" required>
    </p>
    <p>
      <label for="email2">Confirm Email</label>
      <input id="email2" type="email" name="email2" placeholder="maruf@gmail.com" required>
    </p>

    <p>
      <label for="password">Password</label>
      <input id="password" type="password" name="password" placeholder="******" required>
    </p>

    <p>
      <label for="password2">Confirm Password</label>
      <input id="password2" type="text" name="password2" placeholder="******" required>
    </p>

    <button class="btn" type="submit"> Sign Up </button>
    </form>
   </div>
</body>
</html>