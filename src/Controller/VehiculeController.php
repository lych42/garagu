<?php

namespace App\Controller;

use App\Repository\HorairesRepository;
use App\Repository\VehichleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    #[Route('/vehicule', name: 'app_vehicule')]
    public function index(VehichleRepository $vehicleRepository, HorairesRepository $horairesRepository): Response
    {
        $vehicles = $vehicleRepository->findAll();
        $horaires = $horairesRepository->findAll();

        return $this->render('vehicule/index.html.twig', [
            'controller_name' => 'VehichuleController',
            'vehicles' => $vehicles, 
            'horaires' => $horaires
        ]);
    }
}