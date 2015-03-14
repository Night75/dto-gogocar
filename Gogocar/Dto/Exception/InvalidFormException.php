<?php

namespace Gogocar\Dto\Exception;

class InvalidFormException extends ApiException
{
    protected $code       = 400;
    protected $message    = 'form.invalid_data';

    public function __construct($extra)
    {
        $this->extra['errors'] = $extra;
    }
}
