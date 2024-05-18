<?php
// src/Controller/ConsejosController.php

namespace App\Controller;

use App\Entity\Consejos;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\ConsejosType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; 

class ConsejosController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/consejos', name: 'app_consejos')]
    public function indexconsejos(): Response
    {  
        $ConsejosRepository = $this->em->getRepository(Consejos::class);
        $consejos = $ConsejosRepository->findAll();
        return $this->render('consejos.html.twig', [
            "resultados" => $ConsejosRepository->findAll(),
            "consejos" => $consejos
        ]);
    }

    #[Route('/consejos/delete/{id}', name: 'consejos_delete', methods: ['DELETE'])]
    public function deleteConsejos(EntityManagerInterface $entityManager, int $id): Response
    {
        $consejo = $entityManager->getRepository(Consejos::class)->find($id);
    
        if (!$consejo) {
            return new Response('No se encontró el consejo con el ID ' . $id, 404);
        }
    
        try {
            $entityManager->remove($consejo);
            $entityManager->flush();
            return new Response('Consejo eliminado con éxito', 200);
        } catch (\Exception $e) {
            return new Response('No se pudo eliminar el consejo porque hay una relación.', 400);
        }
    }
    
  
    
}
