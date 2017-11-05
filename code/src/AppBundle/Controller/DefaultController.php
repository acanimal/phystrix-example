<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Psr\Log\LoggerInterface;
use AppBundle\Repository\ProductRepositoryInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function usersAction(Request $request, LoggerInterface $logger, ProductRepositoryInterface $productRepo)
    {
        $logger->info('Look! I just used a service');

        $products = $productRepo->findAll();
        var_dump($products);
        return $this->json($products);
    }
}
