CREATE DATABASE ipl;

USE DATABASE ipl;

CREATE TABLE player_personal
(   
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    date_of_birth DATE,
    birth_place VARCHAR(20),
    position VARCHAR(30) NOT NULL,
    team VARCHAR(30) NOT NULL,
    match_played SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY (first_name, last_name)
);

CREATE TABLE player_batting
(
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    innings SMALLINT UNSIGNED NOT NULL,
    not_out SMALLINT UNSIGNED NOT NULL,
    runs_scored SMALLINT UNSIGNED NOT NULL,
    highscore SMALLINT UNSIGNED NOT NULL,
    strike_rate SMALLINT UNSIGNED NOT NULL,
    hundred SMALLINT UNSIGNED NOT NULL,
    double_hundred SMALLINT UNSIGNED NOT NULL,
    fifty SMALLINT UNSIGNED NOT NULL,
    four SMALLINT UNSIGNED NOT NULL,
    six SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT FK_player_batting FOREIGN KEY (first_name, last_name)
    REFERENCES player_personal(first_name, last_name)
);

CREATE TABLE player_bowling
(
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    innings SMALLINT UNSIGNED NOT NULL,
    ball SMALLINT UNSIGNED NOT NULL,
    runs_given SMALLINT UNSIGNED NOT NULL,
    fifer SMALLINT UNSIGNED NOT NULL,
    tenfer SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT FK_player_bowling FOREIGN KEY (first_name, last_name)
    REFERENCES player_personal(first_name, last_name)
);

CREATE TABLE player_teams
(
    id INT AUTO_INCREMENT NOT NULL,
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    csk BIT,
    dd BIT,
    gl BIT,
    kxip BIT,
    kt BIT,
    kkr BIT,
    mi BIT,
    pwi BIT,
    rr BIT,
    rps BIT,
    rcb BIT,
    srh BIT,
    PRIMARY KEY(id),
    CONSTRAINT FK_player_teams FOREIGN KEY (first_name, last_name)
    REFERENCES player_personal(first_name, last_name)
);