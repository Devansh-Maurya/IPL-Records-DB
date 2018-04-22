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
        max-width:100%;
        height:auto;
    }
  </style>
</head>

<body style="background-color:black; color:aliceblue; font-family:sans-serif">
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
    $bowling_tenfer = $_POST['tenfers'];

    $dbc = mysqli_connect('localhost', 'root', 'Devansh$#123', 'ipl')
        or die('Error connecting to MySQL server');
    
    $query_player_personal = "UPDATE player_personal SET ". 
        "date_of_birth = '$date_of_birth', birth_city = '$birth_city', position = '$position', ".
        "team = '$team', match_played = '$match_played', birth_state = '$birth_state'".
        "WHERE first_name = '$first_name' AND last_name = '$last_name'";
    
    $query_player_batting = "UPDATE player_batting SET ".
        "innings = '$batting_innings', not_out = '$batting_not_out', ".
        "runs_scored = '$batting_runs_scored', highscore = '$batting_highscore', ball_faced = '$batting_ball_faced',".
        "hundred = '$batting_hundred', double_hundred = '$batting_double_hundred', fifty = '$batting_fifty',".
        "four = '$batting_four', six = '$batting_six'".
        "WHERE first_name = '$first_name' AND last_name = '$last_name'";
    
    $query_player_bowling = "UPDATE player_bowling SET ".
        "innings = '$bowling_innings', ball = '$bowling_ball', wicket = '$bowling_wicket', ".
        "runs_given = '$bowling_runs_given', fifer = '$bowling_fifer', tenfer = '$bowling_tenfer'".
        "WHERE first_name = '$first_name' AND last_name = '$last_name'";

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
    echo '<label>First Name :</label>'.$first_name.'<br />';
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
    echo 'Ball Faced : '.$batting_ball_faced.'<br />';
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