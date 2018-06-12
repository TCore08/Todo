<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

include '../layout/nav.php';
?>
	<center>
 <form action="/action_page.php" method="POST" enctype="multipart/form-data">
  Username:
  <input type="text" name="username" placeholder="username">
  <br>
  Email:
  <input type="email" name="email" placeholder="email">
  <br>
  Password:
  <input type="password" name="password" placeholder="Password"><br>
  Confirm Password:
  <input type="password" name="password" placeholder="Confirm Password">

<input type="file" name="fileToUpload">

  <input type="submit" value="Submit">
</form> 
</center>
</body>
</html>
