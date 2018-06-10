<?php

namespace App\Controller;

use App\Entity\TipoAporte;
use App\Form\TipoAporteType;
use App\Repository\TipoAporteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/tipo/aporte")
 */
class TipoAporteController extends Controller
{
    /**
     * @Route("/", name="tipo_aporte_index", methods="GET")
     */
    public function index(TipoAporteRepository $tipoAporteRepository): Response
    {
        return $this->render('tipo_aporte/index.html.twig', ['tipo_aportes' => $tipoAporteRepository->findAll()]);
    }

    /**
     * @Route("/new", name="tipo_aporte_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $tipoAporte = new TipoAporte();
        $form = $this->createForm(TipoAporteType::class, $tipoAporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoAporte);
            $em->flush();

            return $this->redirectToRoute('tipo_aporte_index');
        }

        return $this->render('tipo_aporte/new.html.twig', [
            'tipo_aporte' => $tipoAporte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_aporte_show", methods="GET")
     */
    public function show(TipoAporte $tipoAporte): Response
    {
        return $this->render('tipo_aporte/show.html.twig', ['tipo_aporte' => $tipoAporte]);
    }

    /**
     * @Route("/{id}/edit", name="tipo_aporte_edit", methods="GET|POST")
     */
    public function edit(Request $request, TipoAporte $tipoAporte): Response
    {
        $form = $this->createForm(TipoAporteType::class, $tipoAporte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tipo_aporte_edit', ['id' => $tipoAporte->getId()]);
        }

        return $this->render('tipo_aporte/edit.html.twig', [
            'tipo_aporte' => $tipoAporte,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tipo_aporte_delete", methods="DELETE")
     */
    public function delete(Request $request, TipoAporte $tipoAporte): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tipoAporte->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoAporte);
            $em->flush();
        }

        return $this->redirectToRoute('tipo_aporte_index');
    }
}
