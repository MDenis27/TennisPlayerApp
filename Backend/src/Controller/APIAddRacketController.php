<?php

namespace App\Controller;

use App\Entity\Person;
use App\Entity\Racket;
use App\Form\PersonType;
use App\Form\RacketType;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
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
     * @Route("/api/addracket", name="add_racketapi", methods={"POST"})
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function index(Request $request)
    {
        $racket = new Racket();
        $person = new Person();

        $data = json_decode($request->getContent(), true);

        $em = $this->getDoctrine()->getManager();

        if (isset($data["idPerson"])){
            $idPerson = $data["idPerson"];
            $person = $em->getRepository('App:Person')->find($idPerson);
        }

        $racket->setBrand($data["brand"]);
        $racket->setModel($data["model"]);
        $racket->setStringed($data["stringed"]);
        $racket->setIdPerson($person);

        try
        {
            if($this->checkIfExist($racket)){
                throw new Exception("This racket already exist");
            }
            $em->persist($racket);
            $em->flush();
            return new JsonResponse(['result' => true,'racket' => $racket],
                200);
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
        }

        return new JsonResponse(['error' => $error], 400);

    }

    private function checkIfExist(Racket $racket)
    {
        return false;
    }
}
