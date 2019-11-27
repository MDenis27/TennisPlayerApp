<?php

namespace App\Controller;

use App\Entity\Person;
use App\Entity\Racket;
use App\Form\PersonType;
use App\Form\RacketType;
use App\Form\RegistrationFormType;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class APIAddRacketController extends AbstractController
{
    /**
     * @Route("/api/addracket", name="add_racketapi")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $racket = new Racket();
        $form = $this->createForm(RacketType::class, $racket);

        $form->handleRequest($request);

        $person = new Person();
        $em = $this->getDoctrine()->getManager();
        if (isset($_GET['idpers'])){
            $idPerson = $_GET['idpers'];
            $person = $em->getRepository('App:Person')->find($idPerson);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $racket = $form->getData();
            $racket->setIdPerson($person);

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist($racket);
                $em->flush();
                $this->addFlash('notice', 'La categorie bien enregistrée.');
            } catch (Exception $e) {
                $this->addFlash('notice', 'La categorie n\'est pas enregistrée.');
            }
            return $this->redirectToRoute('home');
        }

        return $this->render('add_racket/index.html.twig', [
            'racket' => $form->createView(),
            'person' => $person,
            ]);

    }
}
