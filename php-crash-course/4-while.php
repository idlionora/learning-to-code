<?php 

$secret = "magic";
$attempts = 0;
$maxAttemps = 5;

while ($attempts < $maxAttemps) {
    echo "Guess the password: ";
    $guess = trim(fgets(STDIN)); //take input from the command line and trim the white spaces
    $attempts++;

    if ($guess == $secret) {
        echo "Correct! You've unlocked the treasure! 💎\n";
        break; //exit loop
    } elseif ($attempts == $maxAttemps) {
        echo "Out of attempts! The reasure remains locked. 🔒\n";
    } else {
        echo "Wrong! Try again. Attempts left : " . ($maxAttemps - $attempts) . "\n";
    }
}
