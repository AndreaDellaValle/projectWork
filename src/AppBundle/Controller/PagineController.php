<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PagineController extends Controller
{
    /**
     * @Route("/layout", name="layout")
     */
    public function layoutAction(Request $request)
    {
        // pagina di base
        return $this->render('AppBundle::layout.html.twig');
        //echo $_SERVER ['SCRIPT_NAME'];
    }


    /**
     * @Route("/admin_index", name="admin_index")
     */
    public function admin_indexAction(Request $request)
    {
        /*$em = $this->getDoctrine()->getManager();

        $utenti = $em -> getRepository('AppBundle:Utenti')->find($this->getUser()->getId());*/
        // pagina admin
        return $this->render('AppBundle::admin_index.html.twig' /*, array('utenti'=>$utenti)*/);
    }

    /**
     * @Route("/admin_operatori", name="admin_operatori")
     */
    public function admin_operatoriAction(Request $request)
    {
        // pagina admin gestione operatori
        return $this->render('AppBundle::admin_operatori.html.twig');
    }


    /**
     * @Route("/admin_campagne", name="admin_campagne")
     */
    public function admin_campagneAction(Request $request)
    {
        // pagina admin campagne
        return $this->render('AppBundle::admin_campagne.html.twig');
    }

    /**
     * @Route("/admin_report", name="admin_report")
     */
    public function admin_reportAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::admin_report.html.twig');
    }




    /**
     * @Route("/operatore_index", name="operatore_index")
     */
    public function operatore_indexAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::operatore_index.html.twig');
    }

    /**
     * @Route("/operatore_campagne_attive", name="operatore_campagne_attive")
     */
    public function operatore_campagne_attiveAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::operatore_campagne_attive.html.twig');
    }

    /**
     * @Route("/operatore_campagne_passate", name="operatore_campagne_passate")
     */
    public function operatore_campagne_passateAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::operatore_campagne_passate.html.twig');
    }

    /**
     * @Route("/dettagli_campagna", name="dettagli_campagna")
     */
    public function dettagli_campagnaAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::dettagli_campagna.html.twig');
    }

    /**
     * @Route("/operatore_visualizza_campagna", name="operatore_visualizza_campagna")
     */
    public function operatore_visualizza_campagnaAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::operatore_visualizza_campagna.html.twig');
    }

    /**
     * @Route("/dettagli_contatto", name="dettagli_contatto")
     */
    public function dettagli_contattoAction(Request $request)
    {
        // pagina index operatore
        return $this->render('AppBundle::dettagli_contatto.html.twig');
    }

    /**
     * @Route("/example", name="example")
     */
    public function exampleAction()
    {
        $rep = $this->getDoctrine()->getRepository('AppBundle:Utenti');

        $users = $rep->findAll();

        return $this->render('AppBundle::example.html.twig', [
            'users' => $users,
            ]);
    }

}
