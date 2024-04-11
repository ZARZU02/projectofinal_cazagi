<?php
namespace App\Controller;

// ...
use App\Entity\Clases;
use App\Form\ClasesType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class InicioController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/', name: 'app_Clases')]
    public function indexcomunidad(): Response
    {
        $clienteRepository = $this->em->getRepository(Clases::class);
        return $this->render('index.html.twig', [
            "resultados" => $clienteRepository->findAll()
        ]);
    }





   

   /* #[Route('/empleado/delete/{id}', name: 'empleado_delete')]
    public function deleteemp(EntityManagerInterface $entityManager, int $id): Response
    {
        $empleado = $entityManager->getRepository(Empleado::class)->find($id);

        if (!$empleado) {
            throw $this->createNotFoundException(
                'No empleado found for id ' . $id
            );
        }

        try {
            $entityManager->remove($empleado);
            $entityManager->flush();
            header("Location: http://localhost:8000/");
            exit;
        } catch (\Exception $e) {
            // Si ocurre un error al intentar eliminar la entidad
            $errorMessage = "No se pudo eliminar el dept porque hay una relacion." ;
            
            // Imprimir el mensaje de error en lugar de redirigir
            echo $errorMessage;
            exit;
        }

    }

    #[Route('/insert/emp', name: 'ap_empleado')]
    public function indiceemp(Request $request): Response
    {
        $empleado = new Empleado();
        $form = $this->createForm(EmpleadoType::class, $empleado);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($empleado);
            $this->em->flush();
            header("Location: http://localhost:8000/");
            exit;
        }

        return $this->render('insertemp.html.twig', [
            'form' => $form->createView()
            
        ]);
      
       
    }
    #[Route('/empleado/edit/{id}', name: 'empleado_edit')]
    public function updateemp(EntityManagerInterface $entityManager,Request $request, int $id): Response
    {
        $empleado = $entityManager->getRepository(Empleado::class)->find($id);

        if (!$empleado) {
            throw $this->createNotFoundException(
                'No empleado found for id ' . $id
            );
        }

        $empleado->setApellidos('New empleado name!'); // Replace setSomeProperty() with an actual setter method.
        $entityManager->flush();
        $form = $this->createForm(EmpleadoType::class, $empleado); // Assuming you have an EmpleadoType form class
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($empleado);
            $entityManager->flush();
            header("Location: http://localhost:8000/");
            exit;
        }

        return $this->render('updateemp.html.twig', [
            'form' => $form->createView(),
        ]);
       
      
    }

    #[Route('/pagos', name: 'app_cliente')]
    public function indexpagos(EntityManagerInterface $entityManager): Response
    {
        
        $pagos = $entityManager->getRepository(Pagos::class)->findAll();
        
        $result = []; // Initialize the $result array

        for ($i = 0; $i < count($pagos); $i++) {
            if(!empty($pagos[$i]->getPagosNo())) { // Si no tenemos un conjunto de departamentos, no mostramos el empleado
                $result[] = $pagos[$i];
            }
        }
        /*for ($i = 0; $i < count($product); $i++) {
            $dept = $entityManager->getRepository(Dept::class)->find($product[$i]->getDeptNo());
            $product[$i]->setDeptNombre($dept->getDnombre());
            $result[] = $product[$i];
        }
        return $this->render('pagos.html', [
            "resultados" => $result,
            'result' => $pagos,
        ]);

    }

    #[Route('/insert/pagos', name: 'ap_empleado')]
    public function indicepagos(Request $request): Response
    {
        $pagos = new Pagos();
        $form = $this->createForm(PagosType::class, $pagos);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($pagos);
            $this->em->flush();
            header("Location: http://localhost:8000/pagos");
            exit;
        }

        return $this->render('insertpagos.html.twig', [
            'form' => $form->createView()
            
        ]);
      
       
    }
   
    #[Route('/pagos/edit/{id}', name: 'pagos_edit')]
    public function updatepagos(EntityManagerInterface $entityManager,Request $request, int $id): Response
    {
        $pagos = $entityManager->getRepository(Pagos::class)->find($id);

        if (!$pagos) {
            throw $this->createNotFoundException(
                'No empleado found for id ' . $id
            );
        }

        $pagos ->setPedidoFecha('New pagos fecha!'); // Replace setSomeProperty() with an actual setter method.
        $entityManager->flush();
        $form = $this->createForm(PagosType::class, $pagos ); // Assuming you have an EmpleadoType form class
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($pagos);
            $entityManager->flush();
            header("Location: http://localhost:8000/pagos");
            exit;
        }

        return $this->render('updatepagos.html.twig', [
            'form' => $form->createView(),
        ]);
       
      
    }*/
}