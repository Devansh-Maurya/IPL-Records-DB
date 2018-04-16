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
