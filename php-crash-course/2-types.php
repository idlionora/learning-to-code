<?php 

$isStudent = -1; //only zero will return false
var_dump($isStudent, true, $isStudent == true, $isStudent === true); //seeing the value and also its type
// two equal signs, the type coersion will happen, three will not.

$scores = [85, "90", 95.5];

var_dump($scores[0] + $scores[1] + $scores[2]); //this type of coersion is sometimes also called as type juggeling 

$scores2 = [85, (int)"95.5"];

$total = $scores2[0] + $scores2[1];
var_dump($scores2, $total); //php is trying to guess what type that is shoule be using to calculate. something sensible from an expression.
//you can also influence by typecasting. (int)"95.5 is turned into int(95)
//not the best way to get an integer out of floating numbers

echo "Total score is: $total \n"; //you cannot put variables inside of single quotes. special characters also don't work in single quotes;




