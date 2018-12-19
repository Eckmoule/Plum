<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingController extends AbstractController
{
    /**
     * @Route("/", name="shopping_home")
     */
    public function home()
    {
        return $this->render('shopping/home.html.twig');
    }

    /**
     * @Route("/references", name="shopping_reference-list")
     */
    public function index()
    {
        return $this->render('shopping/references.html.twig', []);
    }


}
