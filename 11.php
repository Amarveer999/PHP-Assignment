<?php

// Sample quiz answers (you would replace these with your actual correct answers)
$correctAnswers = ['A', 'B', 'C', 'D'];

// User's selected answers (you would get these from the quiz form submission)
$userAnswers = $_POST['answers']; // Assuming you're using POST method

// Initialize the score
$score = 0;

// Loop through user's answers and compare with correct answers
for ($i = 0; $i < count($userAnswers); $i++) {
    if (isset($userAnswers[$i]) && $userAnswers[$i] === $correctAnswers[$i]) {
        $score++;
    }
}

// Display the user's score
echo "Your score is: $score out of " . count($correctAnswers);

?>