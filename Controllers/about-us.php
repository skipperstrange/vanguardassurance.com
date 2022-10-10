<?php
include_once STATIC_DATA.'board.php';
$headerTitle = '<h1>Our <strong>Story</strong></h1>';
$headerDescription = 'The perfect choice for you next cover.';
$pageTitle = 'About Us';
$headerBackground = IMAGES_URL.'about-1.jpg' ;
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