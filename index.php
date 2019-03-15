<!DOCTYPE html>
<html>
<head>
  <title>JWT-Login</title>
</head>
<body>
<form class="form" role="form" autocomplete="off" id="formLogin" method="post" action = "php/login.php">
    <div class="form-group">
        <label for="uname1">Username</label>
        <input type="text" class="form-control form-control-lg rounded-0" name="uname" id="uname" required>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control form-control-lg rounded-0" id="pass" name = "pass" required autocomplete="new-password">
    </div>
    <button type="submit" class="btn btn-lg btn-info float-right" id="btnLogin">Login</button>
</form>
</body>
</html>