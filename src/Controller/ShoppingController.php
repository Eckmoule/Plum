<?php

namespace App\Controller;

use App\Repository\ReferenceRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function index(ReferenceRepository $repo)
    {
        $references = $repo->findAll();

        return $this->render('shopping/references.html.twig', [
            "references" => $references,
        ]);
    }


}
