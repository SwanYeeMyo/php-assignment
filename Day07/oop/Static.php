<?php
class Greeting {
    public static function welcome(){
        echo "Hello World";
    }
}

Greeting::welcome();
class PI {
    public static $pi = 3.14159;
}

echo PI::$pi;