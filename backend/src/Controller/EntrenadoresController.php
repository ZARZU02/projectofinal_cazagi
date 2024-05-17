<?php
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Entrenadores;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class EntrenadoresController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/entrenadores', name: 'app_entrenadores')]
    public function indexentrenadores(): Response
    {
        $entrenadoresRepository = $this->em->getRepository(Entrenadores::class);
        $entrenadores = $entrenadoresRepository->findAll();
         
        // Si hay clases, renderiza la plantilla clases.html.twig con las clases
        return $this->render('entrenadores.html.twig', [
            "resultados" => $entrenadoresRepository->findAll(),
            "entrenadores" => $entrenadores
        ]);
    }


    
}
