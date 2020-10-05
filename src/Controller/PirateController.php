<?php

namespace App\Controller;

use App\Repository\ProduitsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PirateController extends AbstractController
{
    /**
     * @Route("/pirate", name="pirate")
     */
    public function index(ProduitsRepository $repository)
    {
        return $this->render('base.html.twig', [
            'controller_name' => 'PirateController',
            'produit' => $repository->findAll()
        ]);
    }
}
