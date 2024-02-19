<?php

namespace App\Controller;

use App\Repository\VehichleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculeController extends AbstractController
{
    #[Route('/vehicule', name: 'app_vehicule')]
    public function index(VehichleRepository $vehicleRepository): Response
    {
        $vehicles = $vehicleRepository->findAll();

        return $this->render('vehicule/index.html.twig', [
            'controller_name' => 'VehichuleController',
            'vehicles' => $vehicles
        ]);
    }
}