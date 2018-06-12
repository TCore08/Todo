<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
include 'layout/nav.php';
?>

<div class="row">
    <div class="col-sm-6" style="background-color:lavender;">
    	 <form action="/action_page.php" method="POST" enctype="multipart/form-data">
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
<br><br>

<input type="file" name="fileToUpload">
<br>
  <input type="submit" value="Submit">
</form>
    </div>
    <div class="col-sm-6" style="background-color:lavenderblush;">.col-sm-4</div>
   
  </div>
</body>
</html>

