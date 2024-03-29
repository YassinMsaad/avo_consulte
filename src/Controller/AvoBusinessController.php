<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Avocat;
use App\Entity\User;
use App\Entity\RendezVous;
use App\Repository\AvocatRepository;
use App\Repository\RendezVousRepository;

class AvoBusinessController extends AbstractController
{
    /**
     * @Route("/avobusiness", name="avo_business")
     */
    public function index(): Response
    { $id = $this->getUser()->getId();
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($id);
        if (!(isset($avocat))){
            return $this->redirectToRoute("LoginAvocat");
       }
       $ListRendezVous=$avocat->getRendezVouses();
        return $this->render('avo_business/index.html.twig', [
            'ListRendezVous'=>$ListRendezVous
       
        ]);
    }
    /**
     * @Route("/avobusiness/rendez-vous", name="booking")
     */
    public function booking(): Response{
        $id = $this->getUser()->getId();
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($id);
        if (!(isset($avocat))){
            return $this->redirectToRoute("LoginAr");
        }
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($id);
        $subbed =$avocat->getSubbed();
        if ($subbed === true){
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
            $ListRendezVous=$avocat->getRendezVouses();
           
            return $this->render('avo_business/booking.html.twig', [
                'ListRendezVous'=>$ListRendezVous,
                'id'=>$id
           
            ]);
       }
       return $this->redirectToRoute("LoginAvocat");
    }
     /**
     * @Route("/avobusiness/compte", name="avoaccount")
     */
    public function profile(): Response{
        $id = $this->getUser()->getId();
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($id);
        if (!(isset($avocat))){
            return $this->redirectToRoute("LoginAvocat");
       }
        return $this->render('avo_business/profile.html.twig', [
       
        ]);
    }

    /**
     * @Route("/avobusiness/journal", name="calander")
     */
    public function calander(): Response
    { $id = $this->getUser()->getId();
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($id);
        if (!(isset($avocat))){
            return $this->redirectToRoute("LoginAvocat");
       }
        return $this->render('avo_business/calander.html.twig', [
       
        ]);
    }
    /**
     * @Route("/avobusiness/login",name="LoginAvocat")
     */
   public function login2 (AuthenticationUtils $authenticationUtils):Response{
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();
       return $this->render('avo_business/LoginAvocat.html.Twig', ['last_username' => $lastUsername, 'error' => $error]);
   }

/**
 * @Route("/avobusiness/rendez-vous/{$id}/",name="Usgfdss",methods="GET")
*/ 
    public function UpdateRendezVous($id):Response{
        $rendezvous=$this->getDoctrine()->getRepository(Rendezvous::Class)->Find($id);
        $rendezvous->setStatus("Approved");
        $manager = $this->getDoctrine()->getManager();
        $manager->flush();
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($rendezvous->getIdAvocat());
        $ListRendezVous=$avocat->getRendezVouses();
        return $this->render('avo_business/UpdateRendezVous.html.twig', [
            'ListRendezVous'=>$ListRendezVous

        ]);
    }

public function CancelRendezVous($id):Response{
    $rendezvous=$this->getDoctrine()->getRepository(Rendezvous::Class)->Find($id);
    $rendezvous->setStatus("Cancelled");
    $manager = $this->getDoctrine()->getManager();
    $manager->flush();
    $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($rendezvous->getIdAvocat());
    $ListRendezVous=$avocat->getRendezVouses();
    return $this->render('avo_business/UpdateRendezVous.html.twig', [
        'ListRendezVous'=>$ListRendezVous

    ]);    
}
}
