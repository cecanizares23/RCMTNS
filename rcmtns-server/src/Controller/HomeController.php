<?php

namespace App\Controller;

use App\Form\UserType;
use App\Entity\User;
use App\Repository\TipoCandidataRepository;
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
        return $this->render('candidata/new.html.twig');
    }


    /**
     * @Route("/", name="candidata_new22", methods="POST")
     */
    public function new2(Request $request, TipoCandidataRepository $tipoCandidataRepository): Response
    {
        $candidata = new Candidata();

        $candidata->setTipoDoc($request->request->get('tipo_doc'));
        $candidata->setCualTipoDoc($request->request->get('cual_tipo_doc'));
        $candidata->setNumeroID($request->request->get('numero_id'));
        $candidata->setNombres($request->request->get('nombres'));
        $candidata->setApellidos($request->request->get('apellidos'));
        $candidata->setFechaNacimiento($request->request->get('fecha_nacimiento'));
        $candidata->setEmail($request->request->get('email'));
        $candidata->setTelefono($request->request->get('telefono'));
        $candidata->setDireccion($request->request->get('direccion'));


        //familiar
        $candidata->setEstadoCivil($request->request->get('estado_civil'));
        $candidata->setHijos($request->request->get('hijos'));
        if (
            $candidata->getEstadoCivil() == 'Casada' ||
            $candidata->getEstadoCivil() == 'Unión libre' ||
            $candidata->getHijos() == 'Si'
        ) {
            $candidata->addCategoria($tipoCandidataRepository->find(1));
        }

        //profesional
        $candidata->setNivelEstudios($request->request->get('nivel_estudios'));
        if (
            $candidata->getNivelEstudios() == 'Profesional' ||
            $candidata->getNivelEstudios() == 'Tecnóloga' ||
            $candidata->getNivelEstudios() == 'Técnica'
        ) {
            $candidata->addCategoria($tipoCandidataRepository->find(2));
        }

        $candidata->setUltimoTitulo($request->request->get('ultimo_titulo'));
        $candidata->setNombreTitulo($request->request->get('nombre_titulo'));

        //estudiante
        $candidata->setActualmenteEstudia($request->request->get('actualmente_estudia'));
        if ($candidata->getActualmenteEstudia() == 'Si') {
            $candidata->addCategoria($tipoCandidataRepository->find(3));
        }


        $candidata->setQueEstudia($request->request->get('que_estudia'));
        $candidata->setNombreTituloObtener($request->request->get('nombre_titulo_obtener'));

        //laboral
        $candidata->setActualmenteTrabaja($request->request->get('actualmente_trabaja'));
        if ($candidata->getActualmenteTrabaja() == 'Si') {
            $candidata->addCategoria($tipoCandidataRepository->find(4));
        }

        $candidata->setSectorLaboral($request->request->get('sector_laboral'));
        $candidata->setCualSector($request->request->get('cual_sector'));

        //empresarial
        $candidata->setNegocioPropio($request->request->get('negocio_propio'));
        if ($candidata->getNegocioPropio() == 'Si') {
            $candidata->addCategoria($tipoCandidataRepository->find(5));
        }

        $candidata->setFormaTrabajo($request->request->get('forma_trabajo'));
        $candidata->setTipoEmpresa($request->request->get('tipo_empresa'));
        $candidata->setHaTrabajado($request->request->get('ha_trabajado'));
        $candidata->setTiempoDesempleo($request->request->get('tiempo_desempleo'));
        $candidata->setConoceTIC($request->request->get('conoce_tic'));
        $candidata->setUsaTIC($request->request->get('usa_tic'));
        $candidata->setEntretenimientoUso($request->request->get('entretenimiento_uso'));
        $candidata->setRedesUso($request->request->get('redes_uso'));
        $candidata->setCorreoUso($request->request->get('correo_uso'));
        $candidata->setComprasUso($request->request->get('compras_uso'));
        $candidata->setVentasUso($request->request->get('ventas_uso'));
        $candidata->setComunicaionUso($request->request->get('comunicaion_uso'));
        $candidata->setEducacionUso($request->request->get('educacion_uso'));
        $candidata->setBancoUso($request->request->get('banco_uso'));
        $candidata->setServiciosPublicosUso($request->request->get('servicios_publicos_uso'));
        $candidata->setTramitesUso($request->request->get('tramites_uso'));
        $candidata->setOtroUso($request->request->get('otro_uso'));
        $candidata->setInteresTIC($request->request->get('interes_tic'));
        $candidata->setEntretenimientoInteres($request->request->get('entretenimiento_interes'));
        $candidata->setRedesInteres($request->request->get('redes_interes'));
        $candidata->setCorreoInteres($request->request->get('correo_interes'));
        $candidata->setComprasInteres($request->request->get('compras_interes'));
        $candidata->setVentasInteres($request->request->get('ventas_interes'));
        $candidata->setComunicacionInteres($request->request->get('comunicacion_interes'));
        $candidata->setEducacionInteres($request->request->get('educacion_interes'));
        $candidata->setBancoInteres($request->request->get('banco_interes'));
        $candidata->setServiciosPublicosInteres($request->request->get('servicios_publicos_interes'));
        $candidata->setTramitesInteres($request->request->get('tramites_interes'));
        $candidata->setCualInteres($request->request->get('cual_interes'));
        $candidata->setDesinteresTIC($request->request->get('desinteres_tic'));
        $candidata->setCualDesinteres($request->request->get('cual_desinteres'));

        $candidata->setFechaIngreso(new \DateTime());

        $em = $this->getDoctrine()->getManager();
        $em->persist($candidata);
        $em->flush();
        dump($candidata);
        return $this->redirectToRoute('index');

    }
}