<?php

namespace App\Controller;

use App\Entity\Person;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $person = new Person();
        $rackets = new ArrayCollection();
        $em = $this->getDoctrine()->getManager();
        if(isset($_GET['customer'])){
            $idPerson = $_GET['customer'];
            $person = $em->getRepository('App:Person')->find($idPerson);
            $rackets = $em->getRepository('App:Racket')->findBy(['idPerson' => $idPerson]);
        }

        $listperson = $em->getRepository('App:Person')->findAll();
        if (!$listperson) {
            throw $this->createNotFoundException(
                'Aucun client trouvé');
        }


        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'people' => $listperson,
            'pers' => $person,
            'rackets' => $rackets,
        ]);
    }

}
