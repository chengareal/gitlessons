<?php
class User {
    // объявление статичного свойства
    public static $name = "Макс";
    const NAME = "Сергеевич";
 
    // объявление статичного метода
    public static function ShowName () {
        // Вызов статичного свойства
        echo self::$name . '<br>';
        echo self::NAME . '<br>';
    }
}