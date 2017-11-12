<?php

namespace AppBundle\Repository;

use Odesk\Phystrix\AbstractCommand;
use AppBundle\Phystrix\PhystrixCommandFactory;
use AppBundle\Repository\Command\FindAllCommand;
use AppBundle\Repository\DbProductRepository;

class PhystrixProductRepository implements ProductRepositoryInterface
{
    private $commandFactory;
    private $productRepository;
    
    public function __construct(PhystrixCommandFactory $commandFactory, DbProductRepository $productRepository)
    {
        $this->commandFactory = $commandFactory->getFactory();
        $this->productRepository = $productRepository;
    }

    public function findAll($limit)
    {
        $command = $this->commandFactory->getCommand(FindAllCommand::class, $limit, $this->productRepository);

        return $command->execute();
    }
}
