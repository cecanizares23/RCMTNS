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
     * @Route("/",  methods="POST")
     */
    public function indexPost(Request $request, CandidataRepository $candidataRepository): Response
    {
        $user = $request->request->get('user');
        $pass = $request->request->get('pass');
        if ($user == 'admin' && $pass == 'admin') {
            return $this->render('candidata/index.html.twig', ['candidatas' => $candidataRepository->findAll()]);
        }
        return $this->redirectToRoute('index');
    }

}
