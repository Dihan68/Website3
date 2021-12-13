<html>
<head>
<style>
img{
  width: 100%;

}
  </style>
        <title>User Login and Registration</title>
      <link rel="stylesheet" type="text/css" href="loginstyle.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
<img src="image.jpg" alt="uni"
style="width:128px;height:128px;">
</style>

<div class="container">
      <div class="login-box">
      <div class="row">
        <div class= "col-md-6 login-left">
          <h2>Login Here</h2>
          <form action="validation.php" method="post">
            <div class="form-group">
              <lablel>Username</label>
                <input type="text" name= "user" class="form-control" required>
                </div>
            <div class= "form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
              </div>
              <button type="submit" class="btn btn-primary"> Login </button>
            </form>
      </div>

                <div class= "col-md-6 login-right">
                <h2>Register here</h2>
                <form action="registration.php" method="post"</form>
                  <div class= "form-group">
                <lablel>Username</label>
                <input type="text" name= "user" class= "form-control" required>
            </div>
          <div class= "form-group">
              <label>Password</label>
              <input type="password" name="password" class= "form-control" required>
              <button type="submit" class="btn btn-primary"> Register </button>
        </form>
      </div>

    </div>



</div>


</body>
</html>
