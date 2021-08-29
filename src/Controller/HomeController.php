<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Avocat;
use App\Entity\Blog;
use App\Entity\QrReponse;

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
       
        $Listblog=$this->getDoctrine()->getRepository(Blog::Class)->AfficheBlogArHome();
        $ListQr2=$this->getDoctrine()->getRepository(QrReponse::Class)->AfficheQrArHome();
        $ListQr=$this->getDoctrine()->getRepository(QrReponse::Class)->AfficheQrArSliderHome();
        return $this->render('home_ar.html.twig', [
             'Listblog'=>$Listblog,
             'ListQr'=>$ListQr,
             'ListQr2'=>$ListQr2
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
        $Listblog=$this->getDoctrine()->getRepository(Blog::Class)->AfficheBlogArBlog(3);
        $Listblog2=$this->getDoctrine()->getRepository(Blog::Class)->AfficheBlogArBlog(10);
        return $this->render('MagazineJuridique_ar.html.twig', [
            'Listblog'=>$Listblog,
            'Listblog2'=>$Listblog2,
        ]);
    }
    /**
     * @Route("/renderBlog/{i}",name="render_blog",methods="GET")
    */ 
public function getAllEvents($i):Response{
    $int = (int)$i;
    $Listblog=$this->getDoctrine()->getRepository(Blog::Class)->AfficheBlogArBlog($int+3);
    return $this->render('renderblog.html.twig', [
        'Listblog'=>$Listblog,
    ]);
}

}
