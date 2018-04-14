<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IPL Records | Add details</title>
  <link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body style="background-color:black; color:aliceblue; font-family:sans-serif; text-align:center">

    <?php
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
        
        <label for="birthplace">Birth Place: </label>
        <input type="text" id="birthplace" name="birthplace"/><br /><br />

        <label for="position">Role: </label>
        <br /><input type="radio" id="position" name="position" value="Batsman" required="required"/>Batsman
        <br /><input type="radio" id="position" name="position" value="Bowler"/>Bowler 
        <br /><input type="radio" id="position" name="position" value="Batting Allrounder"/>Batting Allrounder 
        <br /><input type="radio" id="position" name="position" value="Bowling Allrounder"/>Bowling allrounder<br /><br />

        <!--<label for="pastteams" >Teams played for:</label><br />
        <input type="checkbox" id="pastteams" name="pastteams" value="csk">Chennai Super Kings<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="dd">Delhi Daredevils<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="gl">Gujarat Lions<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="kxip">Kings XI Punjab<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="kt">Kochi Tuskers<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="kkr">Kolkata Night Riders<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="mi">Mumnbai Indians<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="pwi">Pune Warriors India<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="rr">Rajasthan Royals<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="rps">Rising Pune Supergiants<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="rcb">Royal Challengers Bengalore<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="srh">Sunrisers Hyderabad<br /><br />
        -->

        <label for="iplteam">Current IPL Team: </label>
        <select name="iplteam" id="iplteam" >
            <option value="Chennai Super Kings">Chennai Super Kings</option>
            <option value="Delhi Daredevils">Delhi Daredevils</option>
            <option value="Kolkata Night Riders">Kolkata Night Riders</option>
            <option value="Kings XI Punjab">Kings XI Punjab</option>
            <option value="Mumbai Indians">Mumbai Indians</option>
            <option value="Rajasthan Royals">Rajasthan Royals</option>
            <option value="Royal Challengers Bengalore">Royal Challengers Bengalore</option>
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
        <!--<label for="battingaverage">Average: </label>
        <input type="number" id="battingaverage" name="battingaverage" min="0" value="0"/><br />-->
        <label for="battingstrikerate">Strike Rate: </label>
        <input type="number" id="battingstrikerate" name="battingstrikerate" min="0" value="0"/><br />
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
        <!--<label for="economy">Economy: </label>
        <input type="number" id="economy" name="economy" min="0" value="0"/><br />
        <label for="bowlingaverage">Average: </label>
        <input type="number" id="bowlingaverage" name="bowltingaverage" min="0" value="0"/><br />
        <label for="bowlingstrikerate">Strike Rate: </label>
        <input type="number" id="bowlingstrikerate" name="bowlingstrikerate" min="0" value="0"/><br />-->
        <label for="fifer">Fifers: </label>
        <input type="number" id="fifer" name="fifer" min="0" value="0"/><br />
        <label for="tenfer">Tenfers: </label>
        <input type="number" id="tenfer" name="tenfer" min="0" value="0"/><br />
        <p></p>
    
    <?php
        }

        if($existence=='old') {
            echo '<h1>Update details for '.$first_name.' '.$last_name.'</h1>';
    ?>

    <form method="post" action="submitteddetails.php">
        <label for="dob">Date of Birth: </label>
        <input type="date" id="dob" name="dob" /><br />
        
        <label for="birthplace">Birth Place: </label>
        <input type="text" id="birthplace" name="birthplace" /><br /><br />

        <br /><input type="radio" id="position" name="position" value="Batsman" required="required"/>Batsman
        <br /><input type="radio" id="position" name="position" value="Bowler"/>Bowler 
        <br /><input type="radio" id="position" name="position" value="Batting Allrounder"/>Batting Allrounder 
        <br /><input type="radio" id="position" name="position" value="Bowling Allrounder"/>Bowling allrounder<br /><br />

        <!--<label for="pastteams" >Teams played for:</label>
        <br /><input type="checkbox" id="pastteams" name="pastteams" value="csk">Chennai Super Kings<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="dd">Delhi Daredevils<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="gl">Gujarat Lions<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="kxip">Kings XI Punjab<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="kt">Kochi Tuskers<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="kkr">Kolkata Night Riders<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="mi">Mumnbai Indians<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="pwi">Pune Warriors India<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="rr">Rajasthan Royals<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="rps">Rising Pune Supergiants<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="rcb">Royal Challengers Bengalore<br />
        <input type="checkbox" id="pastteams" name="pastteams" value="srh">Sunrisers Hyderabad<br /><br />
        -->

        <label for="iplteam">Current IPL Team: </label>
        <select name="iplteam" id="iplteam" >
        <option value="Chennai Super Kings">Chennai Super Kings</option>
            <option value="Delhi Daredevils">Delhi Daredevils</option>
            <option value="Kolkata Night Riders">Kolkata Night Riders</option>
            <option value="Kings XI Punjab">Kings XI Punjab</option>
            <option value="Mumbai Indians">Mumbai Indians</option>
            <option value="Rajasthan Royals">Rajasthan Royals</option>
            <option value="Royal Challengers Bengalore">Royal Challengers Bengalore</option>
            <option value="Sunrisers Hyderabad">Sunrisers Hyderabad</option>
        </select>
        <br /><br />
        <label for="matches">Matches Played: </label>
        <input type="number" id="matches" name="matches" min="0"/><br />

        <h3>Batting Career</h3>

        <label for="battinginnings">Innings: </label>
        <input type="number" id="battinginnings" name="battinginnings" min="0"/><br />
        <label for="no">Not Outs: </label>
        <input type="number" id="no" name="notout" min="0"/><br />
        <label for="battingrun">Runs scored: </label>
        <input type="number" id="battingrun" name="battingrun" min="0"/><br />
        <label for="highscore">Highscore: </label>
        <input type="number" id="highscore" name="highscore" min="0"/><br />
        <label for="battingaverage">Average: </label>
        <input type="number" id="battingaverage" name="battingaverage" min="0"/><br />
        <label for="battingstrikerate">Strike Rate: </label>
        <input type="number" id="battingstrikerate" name="battingstrikerate" min="0"/><br />
        <label for="hundred">Hundreds: </label>
        <input type="number" id="hundred" name="hundred" min="0"/><br />
        <label for="doublehundred">Double Hundreds: </label>
        <input type="number" id="doublehundred" name="doublehundred" min="0"/><br />
        <label for="fifty">Fifties: </label>
        <input type="number" id="fifty" name="fifty" min="0"/><br />
        <label for="four">4s: </label>
        <input type="number" id="four" name="four" min="0"/><br />
        <label for="six">6s: </label>
        <input type="number" id="six" name="six" min="0"/><br />

        <h3>Bowling Career</h3>

        <label for="bowlinginnings">Innings: </label>
        <input type="number" id="bowlinginnings" name="bowlinginnings" min="0"/><br />
        <label for="ball">Balls: </label>
        <input type="number" id="ball" name="ball" min="0"/><br />
        <label for="bowlingrun">Runs: </label>
        <input type="number" id="bowlingrun" name="bowlingrun" min="0"/><br />
        <!--<label for="economy">Economy: </label>
        <input type="number" id="economy" name="economy" min="0"/><br />
        <label for="bowlingaverage">Average: </label>
        <input type="number" id="bowlingaverage" name="bowltingaverage" min="0"/><br />
        <label for="bowlingstrikerate">Strike Rate: </label>
        <input type="number" id="bowlingstrikerate" name="bowlingstrikerate" min="0"/><br />-->
        <label for="fifer">Fifers: </label>
        <input type="number" id="fifer" name="fifer" min="0"/><br />
        <label for="tenfer">Tenfers: </label>
        <input type="number" id="tenfers" name="tenfers" min="0"/><br />
        <p></p>

    <?php
        }
    ?>

        <input type="submit" name="Submit" value="Submit" />

    </form>

</body>