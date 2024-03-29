<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(): Response
    {
        $params =  [
            'controller_name' => 'HomePageController',
            'menu' => [
                0 => [
                    'url' => '/discotheque',
                    'name' => 'Discothèque',
                ],
                1 => [
                    'url' => '/',
                    'name' => 'Toto',
                ],
            ],
        ];
        
        return $this->render('home_page/index.html.twig', $params);
    }
}
