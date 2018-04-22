<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IPL Records | Submitted details</title>
  <link rel="stylesheet" type="text/css" href="style1.css" />
  <link rel="shortcut icon" href="/icon.ico" type="image/x-icon">
  <link rel="icon" href="/icon.ico" type="image/x-icon">

  <style>
    .parallax {

        background-image: url("stadiumb.jpg");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width:auto;
        max-height:100%;
    }
  </style>
</head>

<body style="background-color:black; color:aliceblue; font-family:sans-serif; font-size: 50px">
<div class="parallax" style=" padding-bottom:80%">
<div style="padding-left: 150px;">

    <h1>Welcome to IPL Records</h1>

<?php
    if(!empty($_POST['firstname'])) {
        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        
        
        $dbc = mysqli_connect('localhost', 'root', 'Devansh$#123', 'ipl')
            or die('Error connecting to MySQL server');
        
        $query_player_personal = "DELETE FROM player_personal ".
            "WHERE first_name = '$first_name' AND last_name = '$last_name'";
        
        $result_player_personal = mysqli_query($dbc, $query_player_personal)
            or die('Error querying database for player_personal table');

        echo '<h2>Record of '.$first_name.' '.$last_name.' has been removed</h2><br />';
        echo '<h3>Thank you !</h3><br />';

        mysqli_close($dbc);
    }
    else {
        echo "<div style='padding-bottom:25%'><h3>No such record found !<br><br>Please check the name again.</h3></div>";
    }

?>
</div>
</div>
</html>
</body>