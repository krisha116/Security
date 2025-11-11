<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class DashboardController extends AbstractController
{ 
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        
        return $this->render('dashboard/index.html.twig', [
            'user' => $this->getUser(),
        ]);
    }

    #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout(): void
    {
  
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}