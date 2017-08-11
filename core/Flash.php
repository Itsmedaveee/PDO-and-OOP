<?php 

namespace Core;

class Flash
{
    public static function message($level, $message) 
    {
        return $_SESSION['flash_message'][$level] = $message;
    }
}