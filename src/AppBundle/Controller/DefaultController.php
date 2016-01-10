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

    //codice mailup QUI !
//        $username = 'm76488';
//        $password = 'codemaster1';
//        
//        $client = new MailUpClient($username, $password);
//        $recipients = $client->getGroupRecipients(26);
//        foreach ($recipients->Items as $key => $value) {
//            //contrllo se i report scaricati esistono nel database
//            $exist = false;
//            $existingReports = $repository->findAll();
//            $name = NULL;
//            $campaign = NULL;
//            foreach ($value->Fields as $key => $field) {
//                if ($field->Description == 'name') {
//                    $name = $field->Value;
//                }
//                if ($field->Description == 'Campagne') {
//                    $campaign = $field->Value;
//                }
//            }
//            foreach ($existingReports as $n => $existingReport) {
//                if($existingReport->getEmail() == $value->Email && $existingReport->getCampaign() == $campaign) {
//                    $exist = true;
//                }
//            }
//            if(!$exist) {
//                $counter = NULL;
//                $operators = $repo->createQueryBuilder('o')
//                    ->where('o.enabled = 1')
//                    ->andWhere('o.status = 1')
//                    ->andWhere('o.roles LIKE :role')
//                    ->setParameter('role', '%ROLE_OPERATORE%')
//                    ->getQuery()
//                    ->getResult();
//                foreach ($operators as $key => $operator) {
//                    $counter[$operator->getId()] = count($operator->getReports());
//                }
//                asort($counter);
//                $selectedOperator = $repo->find(array_keys($counter)[0]);
//                $newReport = new Report;
//                $newReport
//                    ->setCampaign($campaign)
//                    ->setName($name)
//                    ->setPhone($value->MobileNumber)
//                    ->setEmail($value->Email)
//                    ->setDateTime(date_create_from_format('Y-m-d H:i', date('Y-m-d H:i')))
//                    ->setOperator($selectedOperator)
//                    ->setReply('Non chiamato')
//                    ->setComment('');
//                $em->persist($newReport);
//                $em->flush();
//                $em->clear();
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

        return $this->render('AppBundle:create.html.twig', array(
            'form' => $form->createView()
        ));
 }

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