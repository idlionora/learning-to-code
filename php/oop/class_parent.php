<?php
class Programmer {
    public static function makeSystem() {
        echo "Start Coding <br/>";
    }
}

class AmateurProgrammer extends Programmer {
    public static function makeSystem()
    {
        echo "Read documentation <br/>";
        parent::makeSystem();
        echo "Clean up mess. <br/>";
    }
}

echo "Programmer: <br/>";
echo Programmer::makeSystem() . "<br/>";
echo "Amateur Programmer: <br/>";
echo AmateurProgrammer::makeSystem() . "<br/>";

class Image {
    public static $resizeStatus = true;
    public static function geometry() {
        echo "768x300";
    }
}

class PhotoProfile extends Image {
    public static function geometry() {
        if (self::$resizeStatus) {
            echo "50x50";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br/>";
echo PhotoProfile::geometry() . "<br/>";
echo "<br/>";
Image::$resizeStatus = false;
echo PhotoProfile::geometry() . "<br/>";
?>
