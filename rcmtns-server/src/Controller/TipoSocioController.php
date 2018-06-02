<?php

namespace App\Controller;

use App\Entity\TipoSocio;
use App\Form\TipoSocioType;
use App\Repository\TipoSocioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipo/socio")
 */
class TipoSocioController extends Controller
{
    /**
     * @Route("/", name="tipo_socio_index", methods="GET")
     */
    public function index(TipoSocioRepository $tipoSocioRepository): Response
    {
        return $this->render('tipo_socio/index.html.twig', ['tipo_socios' => $tipoSocioRepository->findAll()]);
    }

    /**
     * @Route("/new", name="tipo_socio_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $tipoSocio = new TipoSocio();
        $form = $this->createForm(TipoSocioType::class, $tipoSocio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoSocio);
            $em->flush();

            return $this->redirectToRoute('tipo_socio_index');
        }

        return $this->render('tipo_socio/new.html.twig', [
            'tipo_socio' => $tipoSocio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_socio_show", methods="GET")
     */
    public function show(TipoSocio $tipoSocio): Response
    {
        return $this->render('tipo_socio/show.html.twig', ['tipo_socio' => $tipoSocio]);
    }

    /**
     * @Route("/{id}/edit", name="tipo_socio_edit", methods="GET|POST")
     */
    public function edit(Request $request, TipoSocio $tipoSocio): Response
    {
        $form = $this->createForm(TipoSocioType::class, $tipoSocio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_socio_edit', ['id' => $tipoSocio->getId()]);
        }

        return $this->render('tipo_socio/edit.html.twig', [
            'tipo_socio' => $tipoSocio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_socio_delete", methods="DELETE")
     */
    public function delete(Request $request, TipoSocio $tipoSocio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoSocio->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoSocio);
            $em->flush();
        }

        return $this->redirectToRoute('tipo_socio_index');
    }
}
