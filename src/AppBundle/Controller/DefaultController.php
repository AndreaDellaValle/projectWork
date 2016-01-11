<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="")
     */
     public function loginAction(Request $request)
    {
    $securityContext = $this->container->get('security.context');
    $router = $this->container->get('router');

    if ($securityContext->isGranted('ROLE_ADMIN')) {
        return new RedirectResponse($router->generate('admin_index'), 307);
    }

    if ($securityContext->isGranted('ROLE_USER')) {
        return new RedirectResponse($router->generate('operatore_index'), 307);
    }

        $form = $this->container->get('fos_user.registration.form');
        $formHandler = $this->container->get('fos_user.registration.form.handler');
        $confirmationEnabled = $this->container->getParameter('fos_user.registration.confirmation.enabled');

        $process = $formHandler->process($confirmationEnabled);
        if ($process) {
            $user = $form->getData();
            return $this->render('AppBundle::login.html.twig', [
            'form' => $form->createView(),
            'path' => $_SERVER['SCRIPT_NAME']],
            $this->addFlash('notice', 'Login Effettuata')
        //'users' => $users,
        );
        }

//chiude il foreach
    }//chiude loginAction
//}chiude classDefault controller


     /**
      * @Route("/mostrachiamate", name="mostrachiamate")
      */
     public function mostrachiamateAction($id)
     {
         $product = $this->getDoctrine()
             ->getRepository('AppBundle:Chiamate')
             ->find($id);

         if (!$product) {
             throw $this->createNotFoundException(
                 'No product found for id '.$id
             );
         return $this->var_dump($product);
         }

     }

     /**
      * @Route("/listaCampagne", name="listaCampagne")
      */
     public function listaCampagneAction()
     {
        $listaCampagne = $this->getDoctrine()
            ->getRepository('AppBundle:Contatti')
            ->findAll();

         if (!$listaCampagne) {
             throw $this->createNotFoundException(
                 'non trovo campagne qui'
             );
         
         }
         return $this->render ('AppBundle::operatore_campagne_attive.html.twig',
            ['listaCampagne' => $listaCampagne,
            ]);
     }

}