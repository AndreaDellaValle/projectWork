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
            'path' => $_SERVER['SCRIPT_NAME']
            //$this->addFlash('notice', 'Login Effettuata');
        //'users' => $users,
        ]);
    }
}

 /**
  * @Route("/creachiamata", name="creachiamata")
  */
 public function creaChiamataAction(Request $request/*, $id*/)
 {
     //$repository = this->getDoctrine()->getRepository('AppBundle/Entity/ChiamateRepository');

     //$report = $repository->find($id);
        
        $chiamata = new Chiamata();

        $form = $this->createFormBuilder($chiamata)
            ->add('orario_inizio', 'date')
            ->add('orario_fine', 'date')
            ->add('contatto', 'text')
            ->add('campagna', 'text')
            /*->add('feedback', 'entity', array(
                'class' => 'AppBundle:Teacher',
                'choice_label' => 'fullName',
            ))*/
            ->add('save', 'submit', array('label' => 'Create chiamata'))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid())
        {
            $em = $this->getDoctrine()->getManager();

            $em->persist($chiamata);
            $em->flush();

            return $this->redirectToRoute('course_show', array('id' => $course->getId()));
        }

        return $this->render('AppBundle:Course:create.html.twig', array(
            'form' => $form->createView()
        ));
 }
}
