<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\HorairesRepository;
use App\Repository\ServiceRepository;
class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(HorairesRepository $horairesRepository, ServiceRepository $serviceRepository): Response
    {
        $horaires = $horairesRepository->findAll();
        $services = $serviceRepository->findAll();

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
            'horaires' => $horaires,
            'services' => $services
        ]);
    }
}