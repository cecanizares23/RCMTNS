<?php

namespace App\Controller;

use App\Entity\Candidata;
use App\Form\Candidata1Type;
use App\Repository\CandidataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/candidata")
 */
class CandidataController extends Controller
{
    /**
     * @Route("/", name="candidata_index", methods="GET")
     */
    public function index(CandidataRepository $candidataRepository): Response
    {
        return $this->render('candidata/index.html.twig', ['candidatas' => $candidataRepository->findAll()]);
    }

    /**
     * @Route("/new", name="candidata_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $candidatum = new Candidata();
        $form = $this->createForm(Candidata1Type::class, $candidatum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //asignarle la fecha del sistema

            //metodo que retorne las categorias a las que pertenece

            //recorrer el listado y añadir a la candidata


            $em = $this->getDoctrine()->getManager();
            $em->persist($candidatum);
            $em->flush();

            return $this->redirectToRoute('candidata_index');
        }

        return $this->render('candidata/new.html.twig', [
            'candidatum' => $candidatum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidata_show", methods="GET")
     */
    public function show(Candidata $candidatum): Response
    {
        return $this->render('candidata/show.html.twig', ['candidatum' => $candidatum]);
    }

    /**
     * @Route("/{id}/edit", name="candidata_edit", methods="GET|POST")
     */
    public function edit(Request $request, Candidata $candidatum): Response
    {
        $form = $this->createForm(Candidata1Type::class, $candidatum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //similar al new

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('candidata_edit', ['id' => $candidatum->getId()]);
        }

        return $this->render('candidata/edit.html.twig', [
            'candidatum' => $candidatum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="candidata_delete", methods="DELETE")
     */
    public function delete(Request $request, Candidata $candidatum): Response
    {
        if ($this->isCsrfTokenValid('delete' . $candidatum->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($candidatum);
            $em->flush();
        }

        return $this->redirectToRoute('candidata_index');
    }
}
