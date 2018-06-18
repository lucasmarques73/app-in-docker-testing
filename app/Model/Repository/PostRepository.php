<?php

namespace Model\Repository;

use Doctrine\ORM\EntityRepository;
use Model\Entity\Post;

class PostRepository extends EntityRepository
{
    public function save(Post $post)
    {
        $this->getEntityManager()->persist($post);
        $this->getEntityManager()->flush();
    }

    public function remove(Post $post)
    {
        $this->getEntityManager()->remove($post);
        $this->getEntityManager()->flush();
    }
}
