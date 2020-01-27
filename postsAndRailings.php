<?php
echo 'Hello and welcome to the fence calculator.' . '<br>' . 'Please enter how many posts and railings you have and we will tell you the length of fence you can build. Alternatively please 
enter the length of fence you require and we will tell you how many posts and railings you need.' . '<br>' . '<br>';


//set constant values for post and railings measurments in metres.
define ("RAILING_LENGTH", 1.5);
define ("POST_LENGTH", 0.1);


//1.GIVING POSTS AND RAILINGS RETURNING FENCE LENGTH
//get maximum fence length (with what you have)
//define temporary values for post and railings variables and fence length.
$numPosts = 5;
$numRailings = 3;

//you must have at least one railing to build a fence.
if($numRailings<1 || $numPosts<2) {
    echo 'You do not have enough posts and railings to build a fence.' . '<br>';
} else {
    $fenceLength = getFenceLength($numPosts, $numRailings);
    echo 'Your fence can be ' . $fenceLength . 'm long.';
}

//if number of posts equals two and number of railings is at least 1 the fence length must be 1.7m long (RAILING LENGTH + 2X POST LENGTH).
//otherwise each time a post is added (more than 2) the fence length must be 1.6m more each time (post length plus railing length).

function getFenceLength(int $numPosts, int $numRailings) {
    if ($numPosts == 2 && $numRailings == 1) {
        $fenceLength = RAILING_LENGTH + (POST_LENGTH * 2);
    } else {
        $fenceLength = ($numPosts * POST_LENGTH) + (($numPosts - 1) * RAILING_LENGTH);
    }
    return $fenceLength;
}

//
//elseif ($numPosts > 2 && $numRailings <= ($numPosts - 1)) {
//$fenceLength = ($numPosts * POST_LENGTH) + (($numPosts - 1) * RAILING_LENGTH);
//}


//
//if ($numRailings = 1 && $numPosts = 2) {
//    $fenceLength = RAILING_LENGTH + (POST_LENGTH * 2);
//}


//
//while ($numPosts > 2) {
//    if ($numPosts++, $numRailings++);
//}

// elseif ($numRailings< ($numPosts-1)) {
//    echo 'You do not have enough railings to build a fence.';
//}

//2.GIVING FENCE LENGTH RETURNING POSTS AND RAILINGS
