<?php 

$superhero = "Superman";

/*
function revealIdentity ($superhero) {
    echo "$superhero real name is Clark Kent";
}
// prefered way to pass global scope is to use parameters
*/

function revealIdentity () {
    global $superhero;
    // using globalscope like this existed in PHP version ~4
    // not good idea to depend on global variables in functions
    // functions main use case is for them to be reusable. 
    // tying it to global state make it less predictable.
    $superhero = "Spidemran";
    // this modifies global variable!!
    $message = "real name is Clark Kent";
    echo "$superhero $message\n";
}
// do not change identity if the name of function is reveal!!

revealIdentity();

function countVisitors() {
    static $visitorCount = 0;
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived!\n";
}
// you can use this static for memoization or caching, keep the data is computation is expensive

/*
function getDb() {
    static $db;

    if ($db === null) {
        $db = connect();
    }

    return $db;
}
*/

countVisitors();
countVisitors();
countVisitors();
