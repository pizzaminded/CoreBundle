<?php


namespace pizzaminded\CoreBundle\Traits\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

/**
 * trait RepositorySlugTrait
 * @package pizzaminded\CoreBundle\Traits\Repository
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
trait RepositorySlugTrait
{
    /**
     * @param $slug
     * @return mixed|null
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getOneBySlug($slug)
    {
        /** @var EntityRepository $this */
        $qb = $this->createQueryBuilder('a');
        $qb->select('a')
            ->where('a.slug = :s')
            ->setParameter('s', $slug);

        try {
            $result = $qb->getQuery()->getSingleResult();
        } catch (NoResultException $e) {
            $result = null;
        }

        return $result;

    }

}