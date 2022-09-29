<?php
include_once STATIC_DATA.'board.php';
$subHeaderTitle = '<h1>Our <strong>Story</strong></h1>';
$jumboTitle = '<h1>Our <strong>Story</strong></h1>';
$jumboDescription = 'The perfect choice for you next cover.';
$pageTitle = 'About Us';
$team = $data['board'];

$ourTeam = [];
$i = 0;
    foreach($team as $member){
        if($i <= 6){
            if($member['tags'][0] == 'management'){
            $ourTeam[] = $member;
            $i++;
            }
         }else{
            break;
         }
    }