<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(($username == ipldb) && ($password == ipldb)) {
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Make A choice | IPL Records</title>
  <link rel="stylesheet" type="text/css" href="style1.css" />
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
  <p><h2>Please select an option</h2></p>
  
  <div style=" padding-bottom:40px">
  <form method="post" action="addcricketer.html" style="display : inline-block;">
        <input type="submit" id="set" name="set" value="Add or Update Player Details" style="padding: 16px 32px;"/>
  </form>
  <p></p>
  <form method="post" action="removecricketer.html" style="display : inline-block;">
        <input type="submit" id="set" name="set" value="Remove a Player" style="padding: 16px 32px;"/>
  </form>
  </div>
</div>
</body>
</html>

<?php
    }
    else {
      header('Location: http://localhost/cricket/ipl/login.php?loginstatus=incorrect');
      exit;
    }
?>