<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>IPL Records | Add details</title>
  <link rel="stylesheet" type="text/css" href="style1.css" />
</head>

<body style="background-color:black; color:aliceblue">

    <?php
        if($_POST['old_or_new']=='new') {
            echo '<h1>Enter details for '.$_POST['firstname'].' '.$_POST['lastname'].'</h1>';
        }

        if($_POST['old_or_new']=='old') {
            echo '<h1>Update details for '.$_POST['firstname'].' '.$_POST['lastname'].'</h1>';
        }
    ?>

    <form method="post" action="newreport.php">
        <label for="dob">Date of Birth: </label>
        <input type="date" id="dob" name="dob" /><br />
        
        <label for="birthplace">Birth Place: </label>
        <input type="text" id="birthplace" name="birthplace" /><br /><br />

        <label for="role">Role: </label>
        <br /><input type="radio" id="role" name="role" value="bat" required="required"/>Batsman
        <br /><input type="radio" id="role" name="role" value="bowl"/>Bowler 
        <br /><input type="radio" id="role" name="role" value="batallrounder"/>Batting allrounder 
        <br /><input type="radio" id="role" name="role" value="bowlallrounder"/>Bowling allrounder<br /><br />

        <label for="pastteams" >Teams played for:</label>
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

        <label for="iplteam">Current IPL Team: </label>
        <select name="iplteam" id="iplteam" >
            <option value="csk">Chennai Super Kings</option>
            <option value="dd">Delhi Daredevils</option>
            <option value="kkr">Kolkata Night Riders</option>
            <option value="kxip">Kings XI Punjab</option>
            <option value="mi">Mumbai Indians</option>
            <option value="rr">Rajasthan Royals</option>
            <option value="rcb">Royal Challengers Bengalore</option>
            <option value="srh">Sunrisers Hyderabad</option>
        </select>
        <br /><br />
        <label for="matches">Matches Played: </label>
        <input type="number" id="matches" name="matches" min="0"/><br />

        <h3>Batting Career</h3>

        <label for="battinginning">Innings: </label>
        <input type="number" id="battinginning" name="battinginning" min="0"/><br />
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

        <label for="bowlinginning">Innings: </label>
        <input type="number" id="bowlinginning" name="bowlinginning" min="0"/><br />
        <label for="ball">Balls: </label>
        <input type="number" id="ball" name="ball" min="0"/><br />
        <label for="ballingrun">Runs: </label>
        <input type="number" id="ballingrun" name="ballingrun" min="0"/><br />
        <label for="economy">Economy: </label>
        <input type="number" id="economy" name="economy" min="0"/><br />
        <label for="bowlingaverage">Average: </label>
        <input type="number" id="bowlingaverage" name="bowltingaverage" min="0"/><br />
        <label for="bowlingstrikerate">Strike Rate: </label>
        <input type="number" id="bowlingstrikerate" name="bowlingstrikerate" min="0"/><br />
        <label for="fifer">Fifers: </label>
        <input type="number" id="fifer" name="fifer" min="0"/><br />
        <label for="tenfer">Tenfers: </label>
        <input type="number" id="tenfers" name="tenfers" min="0"/><br />
        <p></p>
        <input type="submit" name="Submit" value="Submit" />

    </form>


</body>