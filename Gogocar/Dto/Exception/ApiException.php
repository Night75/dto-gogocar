<?php

namespace Gogocar\Dto\Exception;

class ApiException extends \Exception
{
    protected $code;
    protected $message;
    protected $extra = [];

    public function __construct($code = null, $message = '', $description = '', array $extra = [])
    {
        $this->code        = $code ? $code : 500;
        $this->message     = $message ? $message : 'Error';
        $this->description = $description ? $description : 'Error';
        $this->extra       = $extra;
    }

    public function getExtra()
    {
        return $this->extra;
    }
}
