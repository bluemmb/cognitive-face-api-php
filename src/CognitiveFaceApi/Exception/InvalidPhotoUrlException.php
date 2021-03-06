<?php

namespace CognitiveFaceApi\Exception;

use Symfony\Component\HttpFoundation\Response;

class InvalidPhotoUrlException extends \Exception
{
    public function __construct()
    {
        $message = 'Invalid Photo URL';

        parent::__construct($message, Response::HTTP_FORBIDDEN);
    }
}