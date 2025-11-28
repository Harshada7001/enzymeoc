<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ENZYME| Log in</title>

  <!-- Google Font: Source Sans Pro -->
 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
       <img class="logo" src="assets/img/logo.jpg" style="width: 40vh"alt=""></br>

    <!--<a href=""><b>DFURN</b> AdminLogin</a>-->
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
		<center><?php if($this->session->flashdata('message')!=''){ echo $this->session->flashdata('message'); }?></center>
      <form action="login_process.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required><br><br>
        <input type="submit" value="Login">
    </form>

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->

</body>
</html>
