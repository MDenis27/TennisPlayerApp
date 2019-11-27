<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use App\Form\RegistrationFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AddPersonController extends AbstractController
{
    /**
     * @Route("/addperson", name="add_person")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function new(Request $request)
    {
        $person = new Person();
        $personb = new Person();
        $form = $this->createForm(PersonType::class, $person);

        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if (isset($_GET['idpers'])){
            $idPerson = $_GET['idpers'];
            $personb = $em->getRepository('App:Person')->find($idPerson);
        }

        if ($form->isSubmitted() && $form->isValid()) {
            /**
            * @var $person Person
             */
            $form->getData();
            if (isset($_GET['idpers'])){
                $idPerson = $_GET['idpers'];
                $personb = $em->getRepository('App:Person')->find($idPerson);
                $personb->setFirstname($form->get('firstname')->getData());
                $personb->setMail($form->get('mail')->getData());
                $personb->setName($form->get('name')->getData());
                $personb->setNote($form->get('note')->getData());
                $personb->setPhone($form->get('phone')->getData());
                $em->persist($personb);
                $em->flush();
            }
            else{
                $em->persist($person);
                $em->flush();
            }

            return $this->redirectToRoute('home');
        }

        return $this->render('add_person/index.html.twig', [
            'personForm' => $form->createView(),
            'person' => $personb,
            ]);

    }


}
