<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AvoBusinessController extends AbstractController
{
    /**
     * @Route("/avo-business", name="avo_business")
     */
    public function index(): Response
    {
        return $this->render('avo_business/index.html.twig', [
       
        ]);
    }
    /**
     * @Route("/avo-business/rendez-vous", name="booking")
     */
    public function booking(): Response
    {
        return $this->render('avo_business/booking.html.twig', [
       
        ]);
    }
     /**
     * @Route("/avo-businesss/compte", name="account")
     */
    public function profile(): Response
    {
        return $this->render('avo_business/profile.html.twig', [
       
        ]);
    }
    /**
     * @Route("/avo-business/journal", name="calander")
     */
    public function calander(): Response
    {
        return $this->render('avo_business/calander.html.twig', [
       
        ]);
    }
   
}
