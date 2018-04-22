<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IPL Records | Added details</title>
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
        max-width:100%;
        height:auto;
    }
  </style>
</head>

<body style="background-color:black; color:aliceblue; font-family:sans-serif;">
<div class="parallax">
<div style="padding-left: 220px;">

    <h1>Welcome to IPL Records</h1>
<?php
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $date_of_birth = $_POST['dob'];
    $birth_city = $_POST['birthcity'];
    $birth_state = $_POST['birthstate'];
    $position = $_POST['position'];
    $team = $_POST['iplteam'];
    $match_played = $_POST['matches'];

    $batting_innings = $_POST['battinginnings'];
    $batting_not_out = $_POST['notout'];
    $batting_runs_scored = $_POST['battingrun'];
    $batting_highscore = $_POST['highscore'];
    $batting_ball_faced = $_POST['battingballfaced'];
    $batting_hundred = $_POST['hundred'];
    $batting_double_hundred = $_POST['doublehundred'];
    $batting_fifty = $_POST['fifty'];
    $batting_four = $_POST['four'];
    $batting_six = $_POST['six'];

    $bowling_innings = $_POST['bowlinginnings'];
    $bowling_ball = $_POST['ball'];
    $bowling_runs_given = $_POST['bowlingrun'];
    $bowling_wicket = $_POST['wicket'];
    $bowling_fifer = $_POST['fifer'];
    $bowling_tenfer = $_POST['tenfer'];

    $dbc = mysqli_connect('localhost', 'root', 'Devansh$#123', 'ipl')
        or die('Error connecting to MySQL server');
    
    $query_player_personal = "INSERT INTO player_personal ". 
        "VALUES ('$first_name', '$last_name', '$date_of_birth',". 
        "'$birth_city', '$birth_state', '$position', '$team', '$match_played')";
    
    $query_player_batting = "INSERT INTO player_batting ".
        "VALUES ('$first_name', '$last_name', ".
        "'$batting_innings', '$batting_not_out', ".
        "'$batting_runs_scored', '$batting_highscore', '$batting_ball_faced',".
        "'$batting_hundred', '$batting_double_hundred', '$batting_fifty',".
        "'$batting_four', '$batting_six')";
    
    $query_player_bowling = "INSERT INTO player_bowling ".
        "VALUES ('$first_name', '$last_name', '$bowling_innings',".
        "'$bowling_ball', '$bowling_runs_given', '$bowling_wicket', '$bowling_fifer',".
        "'$bowling_tenfer')";

    $result_player_personal = mysqli_query($dbc, $query_player_personal)
        or die('Error querying database for player_personal table');
    
    $result_player_batting = mysqli_query($dbc, $query_player_batting)
        or die('Error querying database for player_batting table');

    $result_player_bowling = mysqli_query($dbc, $query_player_bowling)
        or die('Error querying database for player_bowling table');

    mysqli_close($dbc);

    echo '<h2>Thanks for submitting the form</h2><br />';
    echo '<h3>Following details were written in the database:</h3><br />';
    echo '<h4><br />Personal details of the Player:</h4><br />';
    echo 'First Name : '.$first_name.'<br />';
    echo 'Last Name : '.$last_name.'<br />';
    echo 'Date of Birth : '.$date_of_birth.'<br />';
    echo 'Birth Place : '.$birth_city.', '.$birth_state.'<br />';
    echo 'Position in the team : '.$position.'<br />';
    echo 'Current team : '.$team.'<br />';
    echo 'Matches Played : '.$match_played.'<br />';

    echo '<br /><h4>Batting records of the player:</h4><br />';
    echo 'Innings : '.$batting_innings.'<br />';
    echo 'Not Outs : '.$batting_not_out.'<br />';
    echo 'Runs scored : '.$batting_runs_scored.'<br />';
    echo 'Highscore : '.$batting_highscore.'<br />';
    echo 'Balls Faced : '.$batting_ball_faced.'<br />';
    echo 'Hundreds : '.$batting_hundred.'<br />';
    echo 'Double hundreds : '.$batting_double_hundred.'<br />';
    echo 'Fifties : '.$batting_fifty.'<br />';
    echo '4s : '.$batting_four.'<br />';
    echo '6s : '.$batting_six.'<br />';
    
    echo '<br /><h4>Bowling records of the player:</h4><br />';
    echo 'Innings : '.$bowling_innings.'<br />';
    echo 'Balls Bowled : '.$bowling_ball.'<br />';
    echo 'Runs Given : '.$bowling_runs_given.'<br />';
    echo 'Fifers : '.$bowling_fifer.'<br />';
    echo 'Tenfers : '.$bowling_tenfer.'<br />';

?>
</div>
</div>
</html>
</body>