<?php

namespace app\helpers;

class DebugHelper
{
    public static function show($data) 
    {
        echo "<pre>";
        var_dump($data);
        echo "</pre>";
        exit;
    }
}