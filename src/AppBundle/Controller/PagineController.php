<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use AppBundle\Entity\Chiamate;
use AppBundle\Entity\Contatti;
use Codemaster\MailUp\HttpClient\MailUpClient;

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
        

                 //codice mailup QUI !
        $username = 'm76488';
        $password = 'codemaster1';
        
          
        $client = new MailUpClient($username, $password);
        $recipients = $client->getGroupRecipients(26);
        foreach ($recipients->Items as $key => $value) {
        //controllo se i report scaricati esistono nel database
            $exist = false;
            $existingReports = $this->getDoctrine()
                ->getRepository('AppBundle:Contatti')
                ->findAll();
            $name = NULL;
            $campaign = NULL;
            foreach ($value->Fields as $key => $field) {
                if ($field->Description == 'name') {
                    $name = $field->Value;
                }
                if ($field->Description == 'Campagne') {
                    $campaign = $field->Value;
                }
            }
            foreach ($existingReports as $n => $existingReport) {
                if($existingReport->getEmailContatto() == $value->Email && $existingReport->getCampagnaContatto() == $campaign) {
                    $exist = true;
                }
            }
            if(!$exist) {
                $counter = NULL;
                $operator = $this->getDoctrine()
            ->getRepository('AppBundle:Utenti')
            ->find(3);
                
   
                $newReport = new Contatti;
                $newReport
                    ->setCampagnaContatto($campaign)
                    ->setNomeContatto($name)
                    ->setNumeroTelefonoContatto($value->MobileNumber)
                    ->setEmailContatto($value->Email)
                    //->setDateTime(date_create_from_format('Y-m-d H:i', date('Y-m-d H:i')))
                    ->setOperatoreContatto($operator);

                $em = $this->getDoctrine()->getManager();
                $em->persist($newReport);
                $em->flush();
                $em->clear();
                //var_dump ($newReport);die;
            }
        }

        $listaCampagne = $this->getDoctrine()
            ->getRepository('AppBundle:Contatti')
            ->findAll();

         if (!$listaCampagne) {
             throw $this->createNotFoundException(
                 'ops! non trovo campagne di mailup qui'
             );
         
         }

         return $this->render ('AppBundle::operatore_campagne_attive.html.twig',
            ['listaCampagne' => $listaCampagne,
            ]);
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
        $listaContatti = $this->getDoctrine()
            ->getRepository('AppBundle:Contatti')
            ->findAll();

         if (!$listaContatti) {
             throw $this->createNotFoundException(
                 'non trovo contatti di mailup qui'
             );
         
         }
         return $this->render ('AppBundle::operatore_visualizza_campagna.html.twig',
            ['listaContatti' => $listaContatti,
            ]);
     }

    /**
     * @Route("/operatore_visualizza_campagna_separata/{id}", name="operatore_visualizza_campagna_separata")
     */
    public function operatore_visualizza_campagna_separataAction(Request $request, $id)
     {
        $listaContatti = $this->getDoctrine()
            ->getRepository('AppBundle:Contatti')
            ->find($id);

        $chiamata = new Chiamate();

        $form = $this->createFormBuilder($chiamata)
            ->add('status', 'choice', array(
            'choices' => array('da chiamare','completato', 'da richiamare', 'contatto non valido')))
            ->add('orario_inizio', 'datetime', array('label' => ''))
            ->add('orario_fine', 'datetime', array('label' => ''))
            //->add('contatto', 'textarea', array('label' => 'Note e appuntamenti', 'attr' => ['class' => 'textarea']))
            
            ->add('feedback', 'choice', array(
            'choices' => array('nessun feedback','risposta positiva','prezzo elevato', 'scarsa attrattiva', 'mancanze funzionali', 'offerta non chiara')))
            
            ->add('save', 'submit', array('label' => 'salva chiamata', 'attr' => ['class' => 'comincia_chiamata']))
            ->getForm();

        $form->handleRequest($request);

        if($form->isValid())
        {
            $chiamata
                ->setCampagna($listaContatti->getCampagnaContatto())
                ->setContatto($listaContatti);
            
            $em = $this->getDoctrine()->getManager();

            $em->persist($chiamata);
            $em->flush();

            return $this->redirectToRoute('operatore_visualizza_campagna');
        }

         
         return $this->render ('AppBundle::operatore_visualizza_campagna_separata.html.twig',
            ['listaContatti' => $listaContatti,
            'form' => $form->createView()
            ]);
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
        $listaCampagne = $this->getDoctrine()
            ->getRepository('AppBundle:Contatti')
            ->find(3);

        return $this->render('AppBundle::example.html.twig', [
            'users' => $users,
            'campagne' => $listaCampagne,
            ]);
    }

}
