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
<div style="padding:150px;">

    <h1>IPL Records</h1>

<?php

$dbc = mysqli_connect('localhost', 'root', 'Devansh$#123', 'ipl')
        or die('Error connecting to MySQL server');
    
    $query_player_personal = "SELECT * FROM player_personal";
    
    $query_player_batting = "SELECT * FROM player_batting";
    
    $query_player_bowling = "SELECT * FROM player_bowling";
    
    $result_player_personal = mysqli_query($dbc, $query_player_personal)
        or die('Error querying database for player_personal table');
   
    $result_player_batting = mysqli_query($dbc, $query_player_batting)
        or die('Error querying database for player_batting table');

    $result_player_bowling = mysqli_query($dbc, $query_player_bowling)
        or die('Error querying database for player_bowling table');
    
    $record_player_personal = mysqli_fetch_array($result_player_personal);
    $record_player_batting = mysqli_fetch_array($result_player_batting);
    $record_player_bowling = mysqli_fetch_array($result_player_bowling);


    if($_POST['mostruns']) {
        echo '<h2><strong>Here are the players with the most runs :</strong></h2>';
        $query_player_batting = "SELECT first_name, last_name, runs_scored FROM player_batting ".
            "ORDER BY runs_scored desc";
        
        $result_player_batting = mysqli_query($dbc, $query_player_batting)
            or die('Error querying database for player_batting table');
        
        while($record_player_batting = mysqli_fetch_array($result_player_batting)) {
            echo '<strong>'.$record_player_batting['first_name'].' '.$record_player_batting['last_name'].' : </strong>'.$record_player_batting['runs_scored'].'<br/>';
        }
    }

    elseif($_POST['mostwickets']) {
        echo '<h2><strong>Here are the players with the most wickets :</strong></h2>';
        $query_player_bowling = "SELECT first_name, last_name, wicket FROM player_bowling ".
            "ORDER BY wicket desc";
        
        $result_player_bowling = mysqli_query($dbc, $query_player_bowling)
            or die('Error querying database for player_batting table');
        
        while($record_player_bowling = mysqli_fetch_array($result_player_bowling)) {
            echo '<strong>'.$record_player_bowling['first_name'].' '.$record_player_bowling['last_name'].' : </strong>'.$record_player_bowling['wicket'].'<br />';
        }
    }

    if($_POST['bestbattingstrikerate']) {
        echo '<h2><strong>Here are the players with the best batting strike rates :</strong></h2>';
        $query_player_batting = "SELECT first_name, last_name, runs_scored/ball_faced*100 AS strike_rate ".
            "FROM player_batting ORDER BY strike_rate desc";
        
        $result_player_batting = mysqli_query($dbc, $query_player_batting)
            or die('Error querying database for player_batting table');
        
        while($record_player_batting = mysqli_fetch_array($result_player_batting)) {
            echo '<strong>'.$record_player_batting['first_name'].' '.$record_player_batting['last_name'].' : </strong>'.round($record_player_batting['strike_rate'], 2).'<br/>';
        }
    }

    if($_POST['bestbattingaverage']) {
        echo '<h2><strong>Here are the players with the best batting averages :</strong></h2>';
        $query_player_batting = "SELECT first_name, last_name, runs_scored/(innings - not_out) AS average ".
            "FROM player_batting ORDER BY average desc";
        
        $result_player_batting = mysqli_query($dbc, $query_player_batting)
            or die('Error querying database for player_batting table');
        
        while($record_player_batting = mysqli_fetch_array($result_player_batting)) {
            echo '<strong>'.$record_player_batting['first_name'].' '.$record_player_batting['last_name'].' : </strong>'.round($record_player_batting['average'], 2).'<br/>';
        }
    }

    if($_POST['besteconomy']) {
        echo '<h2><strong>Here are the players with the best economy :</strong></h2>';
        $query_player_bowling = "SELECT first_name, last_name, runs_given/ball*6 AS economy FROM player_bowling ".
            "ORDER BY economy desc";
        
        $result_player_bowling = mysqli_query($dbc, $query_player_bowling)
            or die('Error querying database for player_batting table');
        
        while($record_player_bowling = mysqli_fetch_array($result_player_bowling)) {
            echo '<strong>'.$record_player_bowling['first_name'].' '.$record_player_bowling['last_name'].' : </strong>'.$record_player_bowling['economy'].'<br/>';
        }
    }


    echo '<h2>Thank you !</h2><br />';