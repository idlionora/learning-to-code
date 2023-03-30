<?php

class Time {
    public const DAY_IN_SEC = 60*60*24;

    public function tomorrow() {
        return time() + self::DAY_IN_SEC;
    }
}
//unlike static property, we don't need dollar sign to call it
echo Time::DAY_IN_SEC . "<br/>";

$clock = new Time;
echo $clock->tomorrow();
?>
