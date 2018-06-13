<!DOCTYPE html>
<html>
<head>
	<title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<center><h1>Todo App</h1></center>

<div class="row">
    <div class="col-sm-6" style="background-color:lavender;">
      <form action="" id="signin_form" method="POST" >
      	 Email:<br>
         <input type="email" name="email" placeholder="email">
         <br><br>
        Password:<br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Login">
      </form>

    </div>
    <div class="col-sm-6" style="background-color:green;">
      <h1>Sign Up</h1>
       <form action="" id="signup_form" method="POST">
  Username:<br>
  <input type="text" name="username" placeholder="username">
  <br><br>
  Email:<br>
  <input type="email" name="email" placeholder="email">
  <br><br>
  Password:<br>
  <input type="password" name="password" placeholder="Password"><br><br>
  Confirm Password:<br>
  <input type="password" name="password" placeholder="Confirm Password">
<br>
<br>
  <input type="submit" value="Register">
</form>
    </div>
   
  </div>
</body>
</html>
