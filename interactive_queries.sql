INSERT INTO player_personal VALUES ('$first_name', '$last_name', '$date_of_birth',
        '$birth_city', '$birth_state', '$position', '$team', '$match_played');

INSERT INTO player_batting VALUES ('$first_name', '$last_name', 
        '$batting_innings', '$batting_not_out', 
        '$batting_runs_scored', '$batting_highscore', '$batting_ball_faced',
        '$batting_hundred', '$batting_double_hundred', '$batting_fifty',
        '$batting_four', '$batting_six');

INSERT INTO player_bowling 
        VALUES ('$first_name', '$last_name', '$bowling_innings',
        '$bowling_ball', '$bowling_runs_given', '$bowling_wicket', '$bowling_fifer',
        '$bowling_tenfer');   

UPDATE player_personal SET  
        date_of_birth = '$date_of_birth', birth_city = '$birth_city', position = '$position', 
        team = '$team', match_played = '$match_played', birth_state = '$birth_state'
        WHERE first_name = '$first_name' AND last_name = '$last_name';

UPDATE player_batting SET 
        innings = '$batting_innings', not_out = '$batting_not_out', 
        runs_scored = '$batting_runs_scored', highscore = '$batting_highscore', ball_faced = '$batting_ball_faced',
        hundred = '$batting_hundred', double_hundred = '$batting_double_hundred', fifty = '$batting_fifty',
        four = '$batting_four', six = '$batting_six'
        WHERE first_name = '$first_name' AND last_name = '$last_name';

UPDATE player_bowling SET 
        innings = '$bowling_innings', ball = '$bowling_ball', wicket = '$bowling_wicket', 
        runs_given = '$bowling_runs_given', fifer = '$bowling_fifer', tenfer = '$bowling_tenfer'
        WHERE first_name = '$first_name' AND last_name = '$last_name';

/*adding sql queries from choiceresult.php*/


Here are the players with the most runs :

"SELECT first_name, last_name, runs_scored FROM player_batting ".
            "ORDER BY runs_scored desc";
            
 Here are the players with the most wickets :
 
  "SELECT first_name, last_name, wicket FROM player_bowling ".
            "ORDER BY wicket desc";
  Here are the players with the best batting strike rates :
  
  "SELECT first_name, last_name, runs_scored/ball_faced*100 AS strike_rate ".
            "FROM player_batting ORDER BY strike_rate desc";
            
   Here are the players with the best batting averages :   
   
   "SELECT first_name, last_name, runs_scored/(innings - not_out) AS average ".
            "FROM player_batting ORDER BY average desc";
            
  Here are the players with the best economy :
  
   "SELECT first_name, last_name, runs_given/ball*6 AS economy FROM player_bowling ".
            "ORDER BY economy desc";
        
            
 
