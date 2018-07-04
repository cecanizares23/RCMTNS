<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CandidataRepository;
use App\Entity\Candidata;
use App\Form\Candidata1Type;

class HomeController extends Controller
{

    /**
     * @Route("/",name="index", methods="GET")
     */
    public function new(Request $request): Response
    {
        return $this->render('candidata/new.html.twig', [
//            'candidatum' => $candidatum,
//            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/", name="candidata_new22", methods="POST")
     */
    public function new2(Request $request): Response
    {
        $candidata = new Candidata();
        $candidata->setTipoDoc($request->request->get('tipo_doc'));

        dump($candidata);
//        if ($form->isSubmitted() && $form->isValid()) {

        //asignarle la fecha del sistema

        //metodo que retorne las categorias a las que pertenece

        //recorrer el listado y añadir a la candidata


//            $em = $this->getDoctrine()->getManager();
//            $em->persist($candidatum);
//            $em->flush();

//            return $this->redirectToRoute('index');

    }
}