<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IPL Records | Add details</title>
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

<body style="background-color:black; color:white; font-family:sans-serif;">
<div class="parallax">
<div style="padding-left: 220px;">
    <?php
        $dbc = mysqli_connect('127.0.0.1', 'root', 'Devansh$#123', 'ipl');

        $first_name = $_POST['firstname'];
        $last_name = $_POST['lastname'];
        $existence = $_POST['old_or_new'];

        if($existence=='new') {
           echo '<h1>Enter details for '.$first_name.' '.$last_name.'</h1>';
    ?>

        <form method="post" action="submitteddetails.php">

        <input type="hidden" name="firstname" value=<?php echo $first_name ?>>
        <input type="hidden" name="lastname" value=<?php echo $last_name ?>>

        <label for="dob">Date of Birth: </label>
        <input type="date" id="dob" name="dob" /><br />
        
        <label for="birthcity">Birth City </label>
        <input type="text" id="birthcity" name="birthcity"/><br /><br />

        <label for="birthstate">Birth State </label>
        <input type="text" id="birthstatae" name="birthstate"/><br /><br />

        <label for="position">Role: </label>
        <br /><input type="radio" id="position" name="position" value="Batsman" required="required"/>Batsman
        <br /><input type="radio" id="position" name="position" value="Wicketkeeper-Batsman"/>Wicketkeeper-Batsman
        <br /><input type="radio" id="position" name="position" value="Bowler"/>Bowler 
        <br /><input type="radio" id="position" name="position" value="Batting Allrounder"/>Batting Allrounder 
        <br /><input type="radio" id="position" name="position" value="Bowling Allrounder"/>Bowling allrounder<br /><br />

        <label for="iplteam">Current IPL Team: </label>
        <select name="iplteam" id="iplteam" >
            <option value="Chennai Super Kings">Chennai Super Kings</option>
            <option value="Delhi Daredevils">Delhi Daredevils</option>
            <option value="Kolkata Night Riders">Kolkata Night Riders</option>
            <option value="Kings XI Punjab">Kings XI Punjab</option>
            <option value="Mumbai Indians">Mumbai Indians</option>
            <option value="Rajasthan Royals">Rajasthan Royals</option>
            <option value="Royal Challengers Bangalore">Royal Challengers Bangalore</option>
            <option value="Sunrisers Hyderabad">Sunrisers Hyderabad</option>
        </select>
        <br /><br />
        <label for="matches">Matches Played: </label>
        <input type="number" id="matches" name="matches" min="0" value="0"/><br />

        <h3>Batting Career</h3>

        <label for="battinginnings">Innings: </label>
        <input type="number" id="battinginnings" name="battinginnings" min="0" value="0"/><br />
        <label for="no">Not Outs: </label>
        <input type="number" id="no" name="notout" min="0" value="0"/><br />
        <label for="battingrun">Runs scored: </label>
        <input type="number" id="battingrun" name="battingrun" min="0" value="0"/><br />
        <label for="highscore">Highscore: </label>
        <input type="number" id="highscore" name="highscore" min="0" value="0"/><br />
        <label for="battingballfaced">Balls Faced: </label>
        <input type="number" id="battingballfaced" name="battingballfaced" min="0" value="0"/><br />
        <label for="hundred">Hundreds: </label>
        <input type="number" id="hundred" name="hundred" min="0" value="0"/><br />
        <label for="doublehundred">Double Hundreds: </label>
        <input type="number" id="doublehundred" name="doublehundred" min="0" value="0"/><br />
        <label for="fifty">Fifties: </label>
        <input type="number" id="fifty" name="fifty" min="0" value="0"/><br />
        <label for="four">4s: </label>
        <input type="number" id="four" name="four" min="0" value="0"/><br />
        <label for="six">6s: </label>
        <input type="number" id="six" name="six" min="0" value="0"/><br />

        <h3>Bowling Career</h3>

        <label for="bowlinginnings">Innings: </label>
        <input type="number" id="bowlinginnings" name="bowlinginnings" min="0" value="0"/><br />
        <label for="ball">Balls: </label>
        <input type="number" id="ball" name="ball" min="0" value="0"/><br />
        <label for="bowlingrun">Runs: </label>
        <input type="number" id="bowlingrun" name="bowlingrun" min="0" value="0"/><br />
        <label for="wicket">Wickets: </label>
        <input type="number" id="wicket" name="wicket" min="0" value="0"/><br />
        <label for="fifer">Fifers: </label>
        <input type="number" id="fifer" name="fifer" min="0" value="0"/><br />
        <label for="tenfer">Tenfers: </label>
        <input type="number" id="tenfer" name="tenfer" min="0" value="0"/><br />
        <p></p>
    
    <?php
        }

        if($existence=='old') {
            echo '<h1>Update details for '.$first_name.' '.$last_name.'</h1>';

            $query_player_personal = "SELECT * FROM player_personal ".
                "WHERE first_name = '$first_name' AND last_name = '$last_name'";
            
            $query_player_batting = "SELECT * FROM player_batting ".
                "WHERE first_name = '$first_name' AND last_name = '$last_name'";

            $query_player_bowling = "SELECT * FROM player_bowling ".
                "WHERE first_name = '$first_name' AND last_name = '$last_name'";

            $result_player_personal = mysqli_query($dbc, $query_player_personal)
                or die('Error querying player_personal table');
            $result_player_batting = mysqli_query($dbc, $query_player_batting)
                or die('Error querying player_batting table');
            $result_player_bowling = mysqli_query($dbc, $query_player_bowling)
                or die('Error querying player_bowling table');

            $record_player_personal = mysqli_fetch_array($result_player_personal);
            $record_player_batting = mysqli_fetch_array($result_player_batting);
            $record_player_bowling = mysqli_fetch_array($result_player_bowling);
    ?>

    <form method="post" action="updateddetails.php">

        <input type="hidden" name="firstname" value=<?php echo $first_name ?>>
        <input type="hidden" name="lastname" value=<?php echo $last_name ?>>

        <label for="dob">Date of Birth: </label>
        <input type="date" id="dob" name="dob" value="<?php echo $record_player_personal['date_of_birth'] ?>"/><br />
        
        <label for="birthcity">Birth City: </label>
        <input type="text" id="birthcity" name="birthcity" value="<?php echo $record_player_personal['birth_city'] ?>"/><br /><br />

        <label for="birthstate">Birth State: </label>
        <input type="text" id="birthstate" name="birthstate" value="<?php echo $record_player_personal['birth_state'] ?>"/><br /><br />

        <label for="position">Role :</label>
        <br /><input type="radio" id="position" name="position" value="Batsman" required="required" <?php if($record_player_personal['position'] == "Batsman") echo "checked";?>/>Batsman
        <br /><input type="radio" id="position" name="position" value="Wicketkeeper-Batsman" required="required" <?php if($record_player_personal['position'] == "Wicketkeeper-Batsman") echo "checked";?>/>Wicketkeeper-Batsman
        <br /><input type="radio" id="position" name="position" value="Bowler" <?php if($record_player_personal['position'] == "Bowler") echo "checked";?>/>Bowler 
        <br /><input type="radio" id="position" name="position" value="Batting Allrounder" <?php if($record_player_personal['position'] == "Batting Allrounder") echo "checked";?>/>Batting Allrounder 
        <br /><input type="radio" id="position" name="position" value="Bowling Allrounder" <?php if($record_player_personal['position'] == "Bowling Allrounder") echo "checked";?>/>Bowling allrounder<br /><br />


        <label for="iplteam">Current IPL Team: </label>
        <select name="iplteam" id="iplteam" >
        <option value="Chennai Super Kings" <?php if($record_player_personal['team'] == "Chennai Super Kings") echo "SELECTED";?>>Chennai Super Kings</option>
            <option value="Delhi Daredevils" <?php if($record_player_personal['team'] == "Delhi Daredevils") echo "SELECTED";?>>Delhi Daredevils</option>
            <option value="Kolkata Night Riders" <?php if($record_player_personal['team'] == "Kolkata Night Riders") echo "SELECTED";?>>Kolkata Night Riders</option>
            <option value="Kings XI Punjab" <?php if($record_player_personal['team'] == "Kings XI Punjab") echo "SELECTED";?>>Kings XI Punjab</option>
            <option value="Mumbai Indians" <?php if($record_player_personal['team'] == "Mumbai Indians") echo "SELECTED";?>>Mumbai Indians</option>
            <option value="Rajasthan Royals" <?php if($record_player_personal['team'] == "Rajasthan Royals") echo "SELECTED";?>>Rajasthan Royals</option>
            <option value="Royal Challengers Bangalore" <?php if($record_player_personal['team'] == "Royal Challengers Bangalore") echo "SELECTED";?>>Royal Challengers Bangalore</option>
            <option value="Sunrisers Hyderabad" <?php if($record_player_personal['team'] == "Sunrisers Hyderabad") echo "SELECTED";?>>Sunrisers Hyderabad</option>
        </select>
        <br /><br />
        <label for="matches">Matches Played: </label>
        <input type="number" id="matches" name="matches" min="0" value="<?php echo $record_player_personal['match_played'] ?>"/><br />

        <h3>Batting Career</h3>

        <label for="battinginnings">Innings: </label>
        <input type="number" id="battinginnings" name="battinginnings" min="0" value="<?php echo $record_player_batting['innings'] ?>"/><br />
        <label for="no">Not Outs: </label>
        <input type="number" id="no" name="notout" min="0" value="<?php echo $record_player_batting['not_out'] ?>"/><br />
        <label for="battingrun">Runs scored: </label>
        <input type="number" id="battingrun" name="battingrun" min="0" value="<?php echo $record_player_batting['runs_scored'] ?>"/><br />
        <label for="highscore">Highscore: </label>
        <input type="number" id="highscore" name="highscore" min="0" value="<?php echo $record_player_batting['highscore'] ?>"/><br />
        <label for="battingballfaced">Balls Faced: </label>
        <input type="number" id="battingballfaced" name="battingballfaced" min="0" value="<?php echo $record_player_batting['ball_faced'] ?>"/><br />
        <label for="hundred">Hundreds: </label>
        <input type="number" id="hundred" name="hundred" min="0" value="<?php echo $record_player_batting['hundred'] ?>"/><br />
        <label for="doublehundred">Double Hundreds: </label>
        <input type="number" id="doublehundred" name="doublehundred" min="0" value="<?php echo $record_player_batting['double_hundred'] ?>"/><br />
        <label for="fifty">Fifties: </label>
        <input type="number" id="fifty" name="fifty" min="0" value="<?php echo $record_player_batting['fifty'] ?>"/><br />
        <label for="four">4s: </label>
        <input type="number" id="four" name="four" min="0" value="<?php echo $record_player_batting['four'] ?>"/><br />
        <label for="six">6s: </label>
        <input type="number" id="six" name="six" min="0" value="<?php echo $record_player_batting['six'] ?>"/><br />

        <h3>Bowling Career</h3>

        <label for="bowlinginnings">Innings: </label>
        <input type="number" id="bowlinginnings" name="bowlinginnings" min="0" value="<?php echo $record_player_bowling['innings'] ?>"/><br />
        <label for="ball">Balls: </label>
        <input type="number" id="ball" name="ball" min="0" value="<?php echo $record_player_bowling['innings'] ?>"/><br />
        <label for="bowlingrun">Runs: </label>
        <input type="number" id="bowlingrun" name="bowlingrun" min="0" value="<?php echo $record_player_bowling['ball'] ?>"/><br />
        <label for="wicket">Wickets: </label>
        <input type="number" id="wicket" name="wicket" min="0" value="<?php echo $record_player_bowling['wicket'] ?>"/><br />
        <label for="fifer">Fifers: </label>
        <input type="number" id="fifer" name="fifer" min="0" value="<?php echo $record_player_bowling['fifer'] ?>"/><br />
        <label for="tenfer">Tenfers: </label>
        <input type="number" id="tenfers" name="tenfers" min="0" value="<?php echo $record_player_bowling['tenfer'] ?>"/><br />
        <p></p>

    <?php
        }
    ?>

        <input type="submit" name="Submit" value="Submit" style="padding: 10px 20px;"/>

    </form>
    </div>
    </div>
</body>