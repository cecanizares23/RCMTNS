<?php

namespace App\Controller;

use App\Entity\Socio;
use App\Entity\TipoSocio;
use App\Form\SocioType;
use App\Repository\SocioRepository;
use App\Repository\TipoAporteRepository;
use App\Repository\TipoSocioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use phpDocumentor\Reflection\Types\Integer;
use function Sodium\add;
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
     * @Route("/new", name="socio_new", methods="GET")
     */
    public function new(TipoAporteRepository $aporteRepository, TipoSocioRepository $tipoSocioRepository): Response
    {
        return $this->render('socio/new.html.twig', [
            'socios' => $tipoSocioRepository->findAll(),
            'aportes' => $aporteRepository->findAll()
        ]);
    }

    /**
     * @Route("/new", methods="POST")
     */
    public function new2(Request $request, TipoAporteRepository $aporteRepository, TipoSocioRepository $tipoSocioRepository): Response
    {
        $socio = new Socio();
        $socio->setNombre($request->request->get('nombre'));
        $socio->setRepresentante($request->request->get('representante'));
        $socio->setCorreoRepresentante($request->request->get('correo_representante'));
        $socio->setFechaIngreso(new \DateTime($request->request->get('fecha_ingreso')));
        $socio->setNit($request->request->get('nit'));
        $socio->setCedulaRepresentante($request->request->get('cedula_representante'));
        $socio->setTelefonoRepresentante($request->request->get('telefono_representante'));
        $socio->setTipoSocio($tipoSocioRepository->find((int)$request->request->get('tipo_aporte_id')));
        foreach ($request->request->get('tipo_aporte_id') as $aporteId) {
            $socio->addTipoAporte($aporteRepository->find($aporteId));
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($socio);
        $em->flush();
        return $this->redirectToRoute('socio_index');
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

            return $this->redirectToRoute('socio_index', ['id' => $socio->getId()]);
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
        if ($this->isCsrfTokenValid('delete' . $socio->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($socio);
            $em->flush();
        }

        return $this->redirectToRoute('socio_index');
    }
}
