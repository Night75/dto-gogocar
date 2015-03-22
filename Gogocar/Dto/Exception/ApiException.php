<?php

namespace Gogocar\Dto\Exception;

class ApiException extends \Exception
{
    protected $code;
    protected $message;
    protected $description = '';
    protected $extra       = [];

    public function __construct()
    {
        // Hack to force to define properties values for children classes
        $this->validateNonEmptyProp('code');
        $this->validateNonEmptyProp('message');
    }

    public function getExtra()
    {
        return $this->extra;
    }

    /**
     *
     * @param string $prop
     * @throws \Exception
     */
    protected function validateNonEmptyProp($prop)
    {
        if (empty($this->$prop)) {
            throw new \Exception(sprintf(
                'You must define a value for the "%s::%s" property',
                static::class,
                $prop
            ));
        }
    }
}
