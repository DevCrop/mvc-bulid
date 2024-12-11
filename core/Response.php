<?php

namespace app\core;
use app\helpers\DebugHelper;

class Response
{
    public function setStatusCode( int $code)
    {   
       http_response_code($code);
    }

}