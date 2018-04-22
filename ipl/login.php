<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make A choice | IPL Records</title>
  <link rel="stylesheet" type="text/css" href="style1.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/icon.ico" type="image/x-icon">
  <link rel="icon" href="/icon.ico" type="image/x-icon">
  <style>
    .parallax {
      background-image: url("stadiumb.jpg");
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
</head>
<body style="background-color:black; color:aliceblue; font-family:sans-serif; text-align : center;">
<div class="parallax">

  <img src="ipl.png" height="350" alt="" />
  <h1>Welcome to IPL Records</h1>
  <?php
    if($_GET['loginstatus'] == "incorrect") {
        echo "<p><h2>Incorrect username or password !<br>Try again</h2></p>";
    }
    else {
        echo "<p><h2>Enter your log in credentials</h2></p>";
    }
  ?>
  
  <div style=" padding-bottom:40px">
  <form method="post" action="addorremove.php" style="display : inline-block;">
        <label for="username" style=" padding-right:80px">Username:</label>
        <input type="text" id="username" name="username" required="required" autocomplete="on" width="220px"/><br/><br/>
        <label for="password"  style=" padding-right:80px">Password:</label>
        <input type="password" id="password" name="password" required="required" autocomplete="on" autocomplete="current-password" width="220px"/><br/><br/>
        <p></p>
        <input type="submit" id="set" name="set" value="LOG IN" style="padding: 16px 32px;"/>
  </form>
  </div>
</div>
</div>
</body>
</html>
