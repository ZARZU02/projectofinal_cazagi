<?php

namespace App\Controller;

use App\Entity\Alumnos;
use App\Entity\Clase;
use App\Form\AlumnosType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormularioAlumnoController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/formularioalumnos', name: 'app_formularioalumno')]
    public function formularioalumnos(Request $request, EntityManagerInterface $entityManager): Response
    {
        $alumno = new Alumnos();
        $form = $this->createForm(AlumnosType::class, $alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $telefono = $form->get('telefono')->getData();
            $correo = $form->get('correo')->getData();

            // Verificar si el alumno ya está inscrito en la misma clase
            $existingAlumno = $entityManager->getRepository(Alumnos::class)->findOneBy([
                'telefono' => $telefono,
                'correo' => $correo,
            ]);

            if ($existingAlumno) {
                // Redirigir con un mensaje de error si ya está inscrito
                $this->addFlash('error', 'Ya estás inscrito en esta clase.');
                return $this->redirectToRoute('app_clases');
            }

            // Persistir el objeto Alumno en la base de datos
            $entityManager->persist($alumno);
            $entityManager->flush();

            // Añadir mensaje de éxito
            $this->addFlash('success', 'Te has apuntado correctamente.');

            return $this->redirectToRoute('app_clases');
        }

        return $this->render('FormularioAlumno.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
