<?php

namespace App\Controller;

use App\Repository\HorairesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(HorairesRepository $horairesRepository): Response
    {
        $horaires = $horairesRepository->findAll();

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'horaires' => $horaires
        ]);
    }
    
    
}