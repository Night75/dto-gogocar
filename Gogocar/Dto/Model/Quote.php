<?php

namespace Gogocar\Dto\Model;

use JMS\Serializer\Annotation as Serializer;

class Quote extends BaseModel
{
    use Extra\TimestampableTrait;

    /**
     * @Serializer\Expose()
     */
    protected $id;

    /**
     * @Serializer\Expose()
     *
     * @var string
     */
    protected $details;

    /**
     * @Serializer\Expose()
     *
     * @var string
     */
    protected $price;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param mixed $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
