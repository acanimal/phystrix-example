<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\FindProductsService;

class DefaultController extends Controller
{
    /**
     * @Route("/users", name="users")
     */
    public function usersAction(Request $request, FindProductsService $findProducts)
    {
        $products = $findProducts->findAllProducts();

        return $this->json($products);
    }

    /**
     * @Route("/hystrix/status", name="hystrix_status")
     */
    public function hystrixStatusAction(Request $request)
    {

    }
}
