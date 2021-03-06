<?php

namespace Trackem\AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{


    // Find user by ID
    public function findUser($id) {

        return $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('u')
            ->from('AppBundle:User', 'u')
            ->where('u.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

    }

    // Find user by email
    public function findUserByEmail($email) {

        return $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('u')
            ->from('AppBundle:User', 'u')
            ->where('u.emailAddress = :email')
            ->setParameter('email', $email)
            ->getQuery()
            ->getResult();

    }



}
