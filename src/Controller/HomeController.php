<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Avocat;
class HomeController extends AbstractController
{
    /**
     * @Route("/avocat/{id}", name="profile")
     */
    public function avocat($id): Response
    {
        $avocat->getDoctrine()->getRepository(Avocat::Class)->find($id);

        return $this->render('avocat.html.twig', [
            'avocat'->$avocat
        ]);
    }
    /**
     * @Route("/", name="home_ar")
     */
    public function home(): Response
    {
        

        return $this->render('home_ar.html.twig', [
            
        ]);
    }
    /**
     * @Route("/fr/", name="home_fr")
     */
    public function homeFR(): Response
    {
        

        return $this->render('home_fr.html.twig', [
            
        ]);
    }

/**
     * @Route("/Magazine-Juridique/", name="MagazineJuridique_fr")
     */
    public function MagazineJuridique(): Response
    {
        

        return $this->render('MagazineJuridique_fr.html.twig', [
            
        ]);
    }

    /**
     * @Route("/المجلة-القانونية/", name="MagazineJuridique_Ar")
     */
    public function MagazineJuridiqueAR(): Response
    {
        

        return $this->render('MagazineJuridique_ar.html.twig', [
            
        ]);
    }
}
