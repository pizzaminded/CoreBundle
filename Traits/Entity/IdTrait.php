<?php

namespace pizzaminded\CoreBundle\Traits\Entity;

/**
 * Trait IdTrait
 * @package pizzaminded\CoreBundle\Traits\Entity
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait IdTrait
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}