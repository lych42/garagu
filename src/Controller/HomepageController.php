<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HorairesRepository;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(HorairesRepository $horairesRepository): Response
    {
        $horaires = $horairesRepository->findAll();

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'horaires' => $horaires
        ]);
    }
}