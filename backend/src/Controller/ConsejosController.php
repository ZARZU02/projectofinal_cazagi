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

    #[Route('/consejos/delete/{id}', name: 'consejos_delete')]
    public function deleteconsejos(EntityManagerInterface $entityManager, int $id): Response
    {
        $consejos = $entityManager->getRepository(Consejos::class)->find($id);

        if (!$consejos) {
            throw $this->createNotFoundException(
                'No user found for id ' . $id
            );
        }

        try {
            $entityManager->remove($consejos);
            $entityManager->flush();
            header("Location: http://localhost:8000/consejos");
            exit;
        } catch (\Exception $e) {
            // Si ocurre un error al intentar eliminar la entidad
            $errorMessage = "No se pudo eliminar el usuario porque hay una relacion." ;
            
            // Imprimir el mensaje de error en lugar de redirigir
            echo $errorMessage;
            exit;
        }

    }

  
    
}
