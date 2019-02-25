<?php
namespace src4;
class SayHello
{
    public static function world()
    {
        return 'Hello fallbackdir-src!!!!<br />';
    }
}
namespace fallback;
class SayHello
{
    public static function world()
    {
        return 'Hello fallbackdir-srcsnd!!!!<br />';
    }
}
?>
