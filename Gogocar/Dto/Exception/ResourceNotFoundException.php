<?php

namespace Gogocar\Dto\Exception;

class ResourceNotFoundException extends ApiException
{
    protected $code       = 404;
    protected $message    = 'form.invalid_data';
}