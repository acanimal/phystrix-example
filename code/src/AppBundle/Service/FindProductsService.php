<?php

namespace AppBundle\Service;

use AppBundle\Repository\ProductRepositoryInterface;

class FindProductsService
{
  private $productRepository;

  public function __construct(ProductRepositoryInterface $productRepository)
  {
    $this->productRepository = $productRepository;
  }

  public function findAllProducts()
  {
    return $this->productRepository->findAll(0);
  }
}