<?php

namespace Model\Repository;

use Doctrine\ORM\EntityRepository;
use Model\Entity\User;

class UserRepository extends EntityRepository
{
    public function save(User $user)
    {
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function remove(User $user)
    {
        $this->getEntityManager()->remove($user);
        $this->getEntityManager()->flush();
    }
}
