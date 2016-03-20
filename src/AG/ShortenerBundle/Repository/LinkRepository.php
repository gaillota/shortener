<?php

namespace AG\ShortenerBundle\Repository;

/**
 * LinkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LinkRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllQuery($userId)
    {
        return $this->createQueryBuilder('l')
            ->where('l.owner = :user')
            ->setParameter('user', $userId)
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery();
    }

    public function findAllAdminQuery()
    {
        return $this->createQueryBuilder('l')
            ->orderBy('l.createdAt', 'DESC')
            ->getQuery();
    }
}
