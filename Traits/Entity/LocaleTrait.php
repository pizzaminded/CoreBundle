<?php

namespace pizzaminded\CoreBundle\Traits\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait LocaleTrait
 * @package pizzaminded\CoreBundle\Traits\Entity
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait LocaleTrait
{

    /**
     * @var string
     *
     * @Assert\Country()
     * @Assert\NotNull()
     * @Assert\NotBlank()
     * @ORM\Column(name="locale", type="string")
     */
    protected $locale;

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     * @return $this
     */
    public function setLocale(string $locale)
    {
        $this->locale = strtoupper($locale);
        return $this;
    }


}