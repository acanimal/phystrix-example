<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Product;

class DbProductRepository implements ProductRepositoryInterface
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function findAll($limit)
    {
        return $this->em->getRepository(Product::class)->findAll();
    }
}
