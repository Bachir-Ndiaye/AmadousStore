<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ResearchController extends AbstractController
{
    /**
     * @Route("/research", name="research")
     */
    public function index()
    {
        return $this->render('research/index.html.twig', [
            'controller_name' => 'ResearchController',
        ]);
    }
}
