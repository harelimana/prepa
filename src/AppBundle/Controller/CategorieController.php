<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategorieControllerController extends Controller
{
    /**
     * @Route("/listCategorie")
     */
    public function listCategorieAction()
    {
        $categorie = $this->getDoctrine()
                ->getRepository('AppBundle:Categorie')
                ->findAll();
        return $this->render('AppBundle:CategorieController:list_categorie.html.twig', array('categorie'=>$categorie
            // ...
        ));
    }

    /**
     * @Route("/addCategorie")
     */
    public function addCategorieAction()
    {
        return $this->render('AppBundle:CategorieController:add_categorie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deleteCategorie")
     */
    public function deleteCategorieAction()
    {
        return $this->render('AppBundle:CategorieController:delete_categorie.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/readCategorie")
     */
    public function readCategorieAction()
    {
        return $this->render('AppBundle:CategorieController:read_categorie.html.twig', array(
            // ...
        ));
    }

}
