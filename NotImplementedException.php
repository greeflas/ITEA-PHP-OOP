<?php

class NotImplementedException extends \LogicException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $message = 'Method not implemented!';

        parent::__construct($message, $code, $previous);
    }
}
