<?php

namespace Gogocar\Dto\Model\Decorator;

use JMS\Serializer\Annotation as Serializer;

trait TimestampableTrait
{
    /**
     * @Serializer\Expose()
     *
     * @var string
     */
    protected $createdAt;

    /**
     * @Serializer\Expose()
     *
     * @var string
     */
    protected $updatedAt;

    /**
     * @return \Datetime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \Datetime $createdAt
     *
     * @return $this
     */
    public function setCreated(\Datetime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return \Datetime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \Datetime $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt(\Datetime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
