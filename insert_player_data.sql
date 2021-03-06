CREATE DATABASE ipl;

USE DATABASE ipl;

CREATE TABLE player_personal
(   
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    date_of_birth DATE,
    birth_city VARCHAR(20),
    birth_city VARCHAR(20),
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
    ball_faced SMALLINT UNSIGNED NOT NULL,
    hundred SMALLINT UNSIGNED NOT NULL,
    double_hundred SMALLINT UNSIGNED NOT NULL,
    fifty SMALLINT UNSIGNED NOT NULL,
    four SMALLINT UNSIGNED NOT NULL,
    six SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT FK_player_batting FOREIGN KEY (first_name, last_name)
    REFERENCES player_personal(first_name, last_name)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE player_bowling
    innings SMALLINT UNSIGNED NOT NULL,
    ball SMALLINT UNSIGNED NOT NULL,
    runs_given SMALLINT UNSIGNED NOT NULL,
    economy SMALLINT UNSIGNED NOT NULL,
    fifer SMALLINT UNSIGNED NOT NULL,
    tenfer SMALLINT UNSIGNED NOT NULL,
    PRIMARY KEY(id),
    CONSTRAINT FK_player_bowling FOREIGN KEY (first_name, last_name)
    REFERENCES player_personal(first_name, last_name)
    ON DELETE CASCADE
    ON UPDATE CASCADE
 );

/*UTILITY QUERIES :*/

/*1) To view all tables in the database:*/

SHOW TABLES;

/*2) To view the create table querie of a table*/

SHOW CREATE TABLE table_name;

/*3) Remove foreign key constraint*/

ALTER TABLE table_name DROP FOREIGN KEY identifier;

/*4) To add a new column to a table*/

ALTER TABLE table_name ADD column_name constraints AFTER/FIRST column_name;

/*5) To modify a column of a table*/

ALTER TABLE table_name CHANGE COLUMN column_name new_column_name constraints;

/*6) To add a new column to a table*/

ALTER TABLE table_name MODIFY COLUMN column_name constraints;