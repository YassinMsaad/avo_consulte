<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
class AvoBusinessController extends AbstractController
{
    /**
     * @Route("/avo-business", name="avo_business")
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
     * @Route("/avo-business/rendez-vous", name="booking")
     */
    public function booking(): Response
    {$user = $this->getUser();
        if (!(isset($user))){
            return $this->redirectToRoute("LoginAvocat");
       }
        return $this->render('avo_business/booking.html.twig', [
       
        ]);
    }
     /**
     * @Route("/avo-businesss/compte", name="account")
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
     * @Route("/avo-business/journal", name="calander")
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
     * @Route("/avo-business/login",name="LoginAvocat")
     */
   public function login2 (AuthenticationUtils $authenticationUtils):Response{
    $error = $authenticationUtils->getLastAuthenticationError();
    $lastUsername = $authenticationUtils->getLastUsername();
       return $this->render('avo_business/LoginAvocat.html.Twig', ['last_username' => $lastUsername, 'error' => $error]);
   }
}
