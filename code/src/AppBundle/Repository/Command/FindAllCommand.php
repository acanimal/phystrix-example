<?php

namespace AppBundle\Repository\Command;

use Odesk\Phystrix\AbstractCommand;
use AppBundle\Repository\ProductRepositoryInterface;

class FindAllCommand extends AbstractCommand
{
    const COMMAND_NAME = FindAllCommand::class;
    private $productRepository;
    private $limit;
    
    public function __construct($limit, $productRepository)
    {
        $this->limit = $limit;
        $this->productRepository = $productRepository;
    }

    protected function run()
    {
        return $this->productRepository->findAll($this->limit);
    }

    protected function getFallback()
    {
        return array();
    }
}
