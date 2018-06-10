<?php

namespace App\Controller;

use App\Entity\TipoCandidata;
use App\Form\TipoCandidata1Type;
use App\Repository\TipoCandidataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipo/candidata")
 */
class TipoCandidataController extends Controller
{
    /**
     * @Route("/", name="tipo_candidata_index", methods="GET")
     */
    public function index(TipoCandidataRepository $tipoCandidataRepository): Response
    {
        return $this->render('tipo_candidata/index.html.twig', ['tipo_candidatas' => $tipoCandidataRepository->findAll()]);
    }

    /**
     * @Route("/new", name="tipo_candidata_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $tipoCandidatum = new TipoCandidata();
        $form = $this->createForm(TipoCandidata1Type::class, $tipoCandidatum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoCandidatum);
            $em->flush();

            return $this->redirectToRoute('tipo_candidata_index');
        }

        return $this->render('tipo_candidata/new.html.twig', [
            'tipo_candidatum' => $tipoCandidatum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_candidata_show", methods="GET")
     */
    public function show(TipoCandidata $tipoCandidatum): Response
    {
        return $this->render('tipo_candidata/show.html.twig', ['tipo_candidatum' => $tipoCandidatum]);
    }

    /**
     * @Route("/{id}/edit", name="tipo_candidata_edit", methods="GET|POST")
     */
    public function edit(Request $request, TipoCandidata $tipoCandidatum): Response
    {
        $form = $this->createForm(TipoCandidata1Type::class, $tipoCandidatum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_candidata_edit', ['id' => $tipoCandidatum->getId()]);
        }

        return $this->render('tipo_candidata/edit.html.twig', [
            'tipo_candidatum' => $tipoCandidatum,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_candidata_delete", methods="DELETE")
     */
    public function delete(Request $request, TipoCandidata $tipoCandidatum): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoCandidatum->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoCandidatum);
            $em->flush();
        }

        return $this->redirectToRoute('tipo_candidata_index');
    }
}
