<?php 
// enums: creating a type safe way to represent some set of values
// enum is a class

enum DaysOfWeek {
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = DaysOfWeek::WEDNESDAY;
// if you would like to compare value to one of the enum values, you have to use strict operator
if ($today === DaysOfWeek::WEDNESDAY) {
    echo "It is Wednesday!\n";
}

enum Colour: string {
    case RED = '#FF0000';
    case GREEN = '#00FF00';
    case BLUE = '#0000FF';
}

echo Colour::RED->value;

// you can use enums for type hinting

function isWeekend(DaysOfWeek $day): bool {
    return $day === DaysOfWeek::SATURDAY ||
    $day === DaysOfWeek::SUNDAY;
}


echo isWeekend(DaysOfWeek::MONDAY) ? 'Yes' : 'No';
