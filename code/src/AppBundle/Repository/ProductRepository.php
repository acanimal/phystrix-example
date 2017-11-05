<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Product;

class ProductRepository implements ProductRepositoryInterface
{
    private $em;
    
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function findAll()
    {
        return $this->em->getRepository(Product::class)->findAll();
    }
}
