<?php

namespace pizzaminded\CoreBundle\Traits\Entity;

/**
 * Trait TitleTrait
 * @package pizzaminded\CoreBundle\Traits\Entity
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait TitleTrait
{
    /**
     * @var string
     *
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(name="title", type="string")
     */
    protected $title;

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}