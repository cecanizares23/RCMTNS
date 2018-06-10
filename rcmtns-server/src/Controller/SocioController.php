<?php

namespace App\Controller;

use App\Entity\Socio;
use App\Form\SocioType;
use App\Repository\SocioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/socio")
 */
class SocioController extends Controller
{
    /**
     * @Route("/", name="socio_index", methods="GET")
     */
    public function index(SocioRepository $socioRepository): Response
    {
        return $this->render('socio/index.html.twig', ['socios' => $socioRepository->findAll()]);
    }

    /**
     * @Route("/new", name="socio_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $socio = new Socio();
        $form = $this->createForm(SocioType::class, $socio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($socio);
            $em->flush();

            return $this->redirectToRoute('socio_index');
        }

        return $this->render('socio/new.html.twig', [
            'socio' => $socio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="socio_show", methods="GET")
     */
    public function show(Socio $socio): Response
    {
        return $this->render('socio/show.html.twig', ['socio' => $socio]);
    }

    /**
     * @Route("/{id}/edit", name="socio_edit", methods="GET|POST")
     */
    public function edit(Request $request, Socio $socio): Response
    {
        $form = $this->createForm(SocioType::class, $socio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('socio_edit', ['id' => $socio->getId()]);
        }

        return $this->render('socio/edit.html.twig', [
            'socio' => $socio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="socio_delete", methods="DELETE")
     */
    public function delete(Request $request, Socio $socio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$socio->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($socio);
            $em->flush();
        }

        return $this->redirectToRoute('socio_index');
    }
}
