<?php
namespace AdminBundle\Controller;

use AdminBundle\Entity\Tarifs;
use AdminBundle\Form\TarifsType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Description of AdminController
 *
 * @author fournival
 */
class AdminController extends Controller{
    
    /**
    * @Route("/admin/tarif", name="indexAdmin")
    * @Template("AdminBundle::adminTarif.html.twig")
    */
    public function indexAdmin()
    {
        return null;
    }
    /**
    * @Route("/admin/ajout", name="ajoutAdmin")
    * @Template("AdminBundle::adminAjout.html.twig")
    */
    public function ajoutAdmin()
    {
        $em=  $this->getDoctrine()->getManager();
        $tarifs= new Tarifs();
        $form= $this->createForm(TarifsType::class,$tarifs);
        return array(
            'form'=> $form ->createView(),
        );
    }
    
    /**
     * @Route("tarifs",name="tarifs")
     * @Template("AdminBundle::tarif.html.twig")
     */
    public function getAnnonces() {
        
        return array("annonces" => $this->getDoctrine()->getRepository('AdminBundle:Tarifs')->findAll());
    }
    
}
