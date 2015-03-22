<?php

namespace Gogocar\Dto\Model;

use JMS\Serializer\Annotation as Serializer;

class BaseModel
{
    use Extra\HydratorTrait;

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }
}