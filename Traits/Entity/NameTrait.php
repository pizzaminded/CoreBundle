<?php

namespace pizzaminded\CoreBundle\Traits\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * trait NameTrait
 * @package pizzaminded\CoreBundle\Traits\Entity
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait NameTrait
{
    /**
     * @var string
     *
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string")
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}