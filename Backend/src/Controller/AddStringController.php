<?php

namespace App\Controller;

use App\Entity\Racket;
use Exception;
use App\Entity\TennisString;
use App\Form\TennisStringType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddStringController extends AbstractController
{
    /**
     * @Route("/addstring", name="add_string")
     */
    public function index(Request $request)
    {
        $string = new TennisString();
        $racket = new Racket();
        $form = $this->createForm(TennisStringType::class, $string);

        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();

        if (isset($_GET['racket'])){
            $idRacket = $_GET['racket'];
            $racket = $em->getRepository('App:Racket')->find($idRacket);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $string = $form->getData();
            $string->setIdRacket($racket);

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            try {
                $em->persist($string);
                $em->flush();
                $this->addFlash('notice', 'La categorie bien enregistrée.');
            } catch (Exception $e) {
                $this->addFlash('notice', 'La categorie n\'est pas enregistrée.');
            }
            return $this->redirectToRoute('home');
        }

        return $this->render('add_string/index.html.twig', [
            'form' => $form->createView(),
            'racket'=> $racket,
        ]);
    }
}
