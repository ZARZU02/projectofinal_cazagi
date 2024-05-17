<?php
// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Clases;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class ClassesController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/clases', name: 'app_clases')]
    public function indexcomunidad(): Response
    {
        $clasesRepository = $this->em->getRepository(Clases::class);
        $clases = $clasesRepository->findAll();
         
        // Si hay clases, renderiza la plantilla clases.html.twig con las clases
        return $this->render('clases.html.twig', [
            "resultados" => $clasesRepository->findAll(),
            "clases" => $clases
        ]);
    }


    #[Route('/clases/delete/{id}', name: 'clases_delete')]
    public function deleteclases(EntityManagerInterface $entityManager, int $id): Response
    {
        $clases = $entityManager->getRepository(clases::class)->find($id);

        if (!$clases) {
            throw $this->createNotFoundException(
                'No user found for id ' . $id
            );
        }

        try {
            $entityManager->remove($clases);
            $entityManager->flush();
            header("Location: http://localhost:8000/clases");
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
