<?php

namespace pizzaminded\CoreBundle\Traits\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use EasySlugger\SeoUtf8Slugger;

/**
 * Trait SlugTrait
 * @package pizzaminded\CoreBundle\Traits\Entity
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait SlugTrait
{
    /**
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @Assert\Type(type="alnum")
     * @ORM\Column(name="slug", type="string", unique=true)
     */
    protected $slug;

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * Used in lifecyleCallbacks
     * @return $this
     */
    public function setSlugFromName()
    {
        if (method_exists($this, 'getName')) {
            $this->setSlug(SeoUtf8Slugger::slugify($this->getName()));
        }

        return $this;
    }

    /**
     * Used in lifecyleCallbacks
     * @return $this
     */
    public function setSlugFromTitle()
    {
        if (method_exists($this, 'getTitle')) {
            $this->setSlug(SeoUtf8Slugger::slugify($this->getTitle()));
        }

        return $this;
    }

}