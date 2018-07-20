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
      <input id="loginPassword" type="text" name="loginPassword" placeholder="******" required>
    </p>

    <button class="btn" type="submit"> Log In </button>
    </form>
   </div>
</body>
</html>