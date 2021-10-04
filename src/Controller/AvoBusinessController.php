<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Avocat;
use App\Entity\User;
use App\Entity\RendezVous;
use App\Repository\RendezVousRepository;

class AvoBusinessController extends AbstractController
{
    /**
     * @Route("/avobusiness", name="avo_business")
     */
    public function index(): Response
    {$user = $this->getUser();
        if (!(isset($user))){
            return $this->redirectToRoute("LoginAvocat");
       }
        return $this->render('avo_business/index.html.twig', [
       
        ]);
    }
    /**
     * @Route("/avobusiness/rendez-vous", name="booking")
     */
    public function booking(): Response
    {$user = $this->getUser();
        if (!(isset($user))){
            return $this->redirectToRoute("LoginAvocat");
       }
       $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

       $id = $this->getUser()->getId();
       $ListRendezVous=$this->getDoctrine()->getRepository(RendezVous::Class)->AvocatRendezVous($id);
       
        return $this->render('avo_business/booking.html.twig', [
            'ListRendezVous'=>$ListRendezVous
       
        ]);
    }
     /**
     * @Route("/avobusiness/compte", name="avoaccount")
     */
    public function profile(): Response
    {$user = $this->getUser();
        if (!(isset($user))){
            return $this->redirectToRoute("LoginAvocat");
       }
        return $this->render('avo_business/profile.html.twig', [
       
        ]);
    }
    /**
     * @Route("/avobusiness/journal", name="calander")
     */
    public function calander(): Response
    {$user = $this->getUser();
        if (!(isset($user))){
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
}
