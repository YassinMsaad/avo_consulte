<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
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
        $avocat=$this->getDoctrine()->getRepository(Avocat::Class)->find($id);

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
 /**
     * @Route("/renderQr/{i}",name="render_Qr",methods="GET")
    */ 
    public function RenderQr($i):Response{
        $int = (int)$i;
        $ListQr=$this->getDoctrine()->getRepository(QrReponse::Class)->AfficheQrArQr($int+3);
        return $this->render('renderQr.html.twig', [
            'ListQr'=>$ListQr,
        ]);
    }
      /**
     * @Route("/استشارات-قانونية/", name="ConsultationJuridique_Ar")
     */
    public function ConsultationJuridiqueAr(): Response
    {
        $ListQr=$this->getDoctrine()->getRepository(QrReponse::Class)->AfficheQrArSliderHome();
        $ListQr2=$this->getDoctrine()->getRepository(QrReponse::Class)->AfficheQrArQr(3);
        return $this->render('ConsultationJuridiqueAr.html.twig', [
            'ListQr'=>$ListQr,
            'ListQr2'=>$ListQr2,
        ]);
    }
      /**
     * @Route("/من-نحن/", name="AboutUs_Ar")
     */
    public function AboutUsAR(): Response
    {
    
        return $this->render('AboutUsAr.html.twig', [
          
        ]);
    }
      /**
     * @Route("/اتصل-بنا/", name="ContactUsAr_Ar")
     */
    public function ContactUsAR(): Response
    {
  
        return $this->render('ContactUsAR.html.twig', [
        ]);
           
    }
    /**
     * @Route("/محامون/",name="Avocats_Ar")
     */
    public function Avocats(Request $request): Response
    {
        if (isset($_POST['Gouvernorat'])|| isset($_POST['key']) || isset($_POST['tribunal'])){
            if ($request->get('key')==""){$str="%";}
            else { $str=$request->get('key');}
            if ($request->get('tribunal')==""){$t="%";}
            else{$t=$request->get('tribunal');}
            unset($_POST['Gouvernorat']);
            unset($_POST['key']);
            unset($_POST['tribunal']);

            
           
            return $this->redirectToRoute('Avocats_Ar2',["g"=>$request->get('Gouvernorat'),"str"=>$str,"t"=>$t]);
       
        }
        $ListAvocat=$this->getDoctrine()->getRepository(Avocat::Class)->AfficheAvocatArAvocats(10);
        
        return $this->render('AvocatsAr.html.twig', [
            'ListAvocat'=>$ListAvocat,
        ]);
    }
    /**
     * @Route("/renderAvocat2/{g}/str={str},spec={t},num={i}",name="render_Avocat2",methods="GET")
    */ 
    public function RenderAvocat2($g,$str,$t,$i):Response{
        $int = (int)$i;
        if ($g=="0"){$g="%";}
        if ($str=="0"){$str="%";}
        if ($t=="0"){$t="%";}

        $ListAvocat=$this->getDoctrine()->getRepository(Avocat::Class)->FindByThreeAr($g,$t,$str,$int+5);
        if($g=="%"){$g="0";}
        if ($t=="%"){$t="0";}
        if ($str=="%"){$str="0";}
        return $this->render('renderAvocatAr.html.twig', [
            'ListAvocat'=>$ListAvocat,
        ]);
    }
/**
     * @Route("/renderAvocat/{i}",name="render_Avocat",methods="GET")
    */ 
    public function RenderAvocat($i):Response{
        $int = (int)$i;

        $ListAvocat=$this->getDoctrine()->getRepository(Avocat::Class)->AfficheAvocatArAvocats($int+5);
        return $this->render('renderAvocatAr.html.twig', [
            'ListAvocat'=>$ListAvocat,
        ]);
    }

     /**
     * @Route("/محامون/{g}/search={str}?,type={t}", name="Avocats_Ar2")
     */
    public function AvocatsRegion($g,$str,$t): Response
    {  
        if (isset($_POST['Gouvernorat'])|| isset($_POST['key']) || isset($_POST['tribunal'])){
            if ($request->get('key')==""){$str="%";}
            else { $str=$request->get('key');}
            if ($request->get('tribunal')==""){$t="%";}
            else{$t=$request->get('tribunal');}
            unset($_POST['Gouvernorat']);
            unset($_POST['key']);
            unset($_POST['tribunal']);

            return $this->redirectToRoute('Avocats_Ar2',["g"=>$request->get('Gouvernorat'),"str"=>$str,"t"=>$t]);
       
        }

    
        $ListAvocat=$this->getDoctrine()->getRepository(Avocat::Class)->FindByThreeAr($g,$t,$str,10);
        if($g=="%"){$g="0";}
        if ($t=="%"){$t="0";}
        if ($str=="%"){$str="0";}
        return $this->render('AvocatsAr2.html.twig', [
          "g"=>$g,
          "t"=>$t,
          "str"=>$str,
          'ListAvocat'=>$ListAvocat,
        ]);
    }

    /** 
    * @Route("/المجلة-القانونية/{id}/{slug}",name="Singleblog",methods="GET")
    */ 
    public function findSingleblog($id):Response{
    $Singleblog=$this->getDoctrine()->getRepository(Blog::Class)->Singleblog($id);
    $Listblog=$this->getDoctrine()->getRepository(Blog::Class)->AfficheBlogArBlog(3);
    return $this->render('BlogSingle.html.twig', [
        'Singleblog'=>$Singleblog,
        'Listblog'=>$Listblog,
    ]);
}
        /**
     * @Route("/استشارات-قانونية/{id}/{slug}",name="Singleqr",methods="GET")
    */ 
    public function findSingleQr($id):Response{
        $Singleqr=$this->getDoctrine()->getRepository(QrReponse::Class)->Singleqr($id);
        $Listqr=$this->getDoctrine()->getRepository(QrReponse::Class)->AfficheQrArQr(3);
        return $this->render('QrSingle.html.twig', [
            'Singleqr'=>$Singleqr,
            'Listqr'=>$Listqr,

        ]);
    }
}
