<?php

// Assume you have a function to check if the user is new, and a function to check if the user has subscribed before
function isNewUser($userId) {
    // Implement logic to check if $userId is a new user
    // Return true if the user is new, false otherwise
}

function hasSubscribedBefore($userId) {
    // Implement logic to check if $userId has subscribed before
    // Return true if the user has subscribed before, false otherwise
}

// Sample user ID (replace this with the actual way you identify users)
$userId = 123;

// Check if the user is new
if (isNewUser($userId)) {
    // Offer a trial period
    echo "Welcome! You are eligible for a trial period. Subscribe now to enjoy the benefits.";
} elseif (!hasSubscribedBefore($userId)) {
    // Offer some incentive for users who haven't subscribed before but are not new
    echo "Special offer for returning users! Subscribe now and enjoy exclusive benefits.";
} else {
    // User has subscribed before
    echo "Thank you for being a valued subscriber!";
}

?>