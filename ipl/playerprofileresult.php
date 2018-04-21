<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IPL Records | Submitted details</title>
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

<body style="background-color:black; color:aliceblue; font-family:sans-serif">
<div class="parallax">
<div style="padding-left: 220px;">

    <h1>Welcome to IPL Records</h1>

<?php
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];

    
    $dbc = mysqli_connect('localhost', 'root', 'Devansh$#123', 'ipl')
        or die('Error connecting to MySQL server');
    
    $query_player_personal = "SELECT * FROM player_personal ".
        "WHERE first_name = '$first_name' AND last_name = '$last_name'";
    
    $query_player_batting = "SELECT * FROM player_batting ".
        "WHERE first_name = '$first_name' AND last_name = '$last_name'";
    
    $query_player_bowling = "SELECT * FROM player_bowling ".
        "WHERE first_name = '$first_name' AND last_name = '$last_name'";
    
    $result_player_personal = mysqli_query($dbc, $query_player_personal)
        or die('Error querying database for player_personal table');
   
    $result_player_batting = mysqli_query($dbc, $query_player_batting)
        or die('Error querying database for player_batting table');

    $result_player_bowling = mysqli_query($dbc, $query_player_bowling)
        or die('Error querying database for player_bowling table');
    
    $record_player_personal = mysqli_fetch_array($result_player_personal);
    $record_player_batting = mysqli_fetch_array($result_player_batting);
    $record_player_bowling = mysqli_fetch_array($result_player_bowling);


    if($record_player_batting['innings'] > $record_player_batting['not_out']) {
        $batting_average = ($record_player_batting['runs_scored']) / ($record_player_batting['innings'] - $record_player_batting['not_out']);
    }
    else {
        $batting_average = "Not defined";
    }

    if($record_player_batting['ball_faced'] > 0) {
        $batting_strike_rate = ($record_player_batting['runs_scored'] / $record_player_batting['ball_faced']) * 100;
    }
    else {
        $batting_strike_rate = "Not defined";
    }

    if($record_player_bowling['wicket'] > 0) {
        $bowling_strike_rate = $record_player_bowling['ball'] / $record_player_bowling['wicket'];
        $bowling_average = $record_player_bowling['runs_given'] / $record_player_bowling['wicket'];
    }
    else {
        $bowling_strike_rate = "Not defined";
        $bowling_average = "Not defined";
    }

    if($record_player_bowling['ball'] > 0) {
        $bowling_economy = ($record_player_bowling['runs_given'] / $record_player_bowling['ball']) * 6;
    }
    else {
        $bowling_economy = "Not defined";
    }

    echo '<h2>Thanks for submitting the form</h2><br />';
    echo '<h3>Here is the profile of '.$record_player_personal['first_name'].' '.$record_player_personal['last_name'].':</h3><br />';
    echo '<h4><br />Personal details of the Player:</h4><br />';
    echo '<label>First Name :</label>'.$record_player_personal['first_name'].'<br />';
    echo 'Last Name : '.$record_player_personal['last_name'].'<br />';
    echo 'Date of Birth : '.$record_player_personal['date_of_birth'].'<br />';
    echo 'Birth City : '.$record_player_personal['birth_city'].'<br />';
    echo 'Birth State : '.$record_player_personal['birth_state'].'<br />';
    echo 'Position in the team : '.$record_player_personal['position'].'<br />';
    echo 'Current team : '.$record_player_personal['team'].'<br />';
    echo 'Matches Played : '.$record_player_personal['match_played'].'<br />';

    echo '<br /><h4>Batting records of the player:</h4><br />';
    echo 'Innings : '.$record_player_batting['innings'].'<br />';
    echo 'Not Outs : '.$record_player_batting['not_out'].'<br />';
    echo 'Runs scored : '.$record_player_batting['runs_scored'].'<br />';
    echo 'Average : '.round($batting_average, 2).'<br/>';
    echo 'Highscore : '.$record_player_batting['highscore'].'<br />';
    echo 'Balls Faced : '.$record_player_batting['ball_faced'].'<br/>';
    echo 'Strike rate : '.round($batting_strike_rate, 2).'<br />';
    echo 'Hundreds : '.$record_player_batting['hundred'].'<br />';
    echo 'Double hundreds : '.$record_player_batting['double_hundred'].'<br />';
    echo 'Fifties : '.$record_player_batting['fifty'].'<br />';
    echo '4s : '.$record_player_batting['four'].'<br />';
    echo '6s : '.$record_player_batting['six'].'<br />';
    
    echo '<br /><h4>Bowling records of the player:</h4><br />';
    echo 'Innings : '.$record_player_bowling['innings'].'<br />';
    echo 'Balls Bowled : '.$record_player_bowling['ball'].'<br />';
    echo 'Runs Given : '.$record_player_bowling['runs_given'].'<br />';
    echo 'Wickets : '.$record_player_bowling['wicket'].'<br />';
    echo 'Economy : '.round($bowling_economy, 2).'</br>';
    echo 'Average : '.round($bowling_average, 2).'<br/>';
    echo 'Strike rate : '.round($bowling_strike_rate, 2).'<br />';
    echo 'Fifers : '.$record_player_bowling['fifer'].'<br />';
    echo 'Tenfers : '.$record_player_bowling['tenfer'].'<br />';

    mysqli_close($dbc);

?>
</div>
</div>
</html>
</body>