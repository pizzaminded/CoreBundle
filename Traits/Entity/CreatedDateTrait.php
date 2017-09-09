<?php

namespace pizzaminded\CoreBundle\Traits\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Trait CreatedDateTrait
 * @package pizzaminded\CoreBundle\Traits\Entity
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait CreatedDateTrait
{
    /**
     * @var DateTime
     * @ORM\Column(type="datetime", name="created_date")
     */
    private $createdDate;

    /**
     * @return DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @param mixed $createdDate
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

}