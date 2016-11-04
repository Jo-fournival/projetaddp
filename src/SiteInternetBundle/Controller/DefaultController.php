<?php
namespace SiteInternetBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexHome()
    {
        return $this->render('SiteInternetBundle::home.html.twig');
    }
    /**
     * @Route("/prestation", name="prestation")
     */
    public function indexPrest()
    {
        return $this->render('SiteInternetBundle::prestation.html.twig');
    }
    /**
     * @Route("/tarif", name="tarif")
     */
    public function indexTarif()
    {
        return $this->render('SiteInternetBundle::tarif.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function indexContact()
    {
        return $this->render('SiteInternetBundle::contact.html.twig');
    }
}
