<?php

namespace Gogocar\Dto\Model\Util;

trait HydratorTrait
{
    public function hydrate(array $data)
    {
        foreach ($data as $prop => $val) {
            $setter = 'set'. ucfirst($prop);

            if (method_exists($this, $setter)) {
                $this->$setter($val);
            }
        }
    }
}
