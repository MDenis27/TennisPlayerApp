<?php

namespace App\Controller;

use App\Entity\Person;
use App\Form\PersonType;
use App\Form\RegistrationFormType;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class APIAddPersonController extends AbstractController
{
    /**
     * @Route("/api/addperson", name="add_personapi", methods={"POST"})
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function index(Request $request)
    {
        $person = new Person();

        $data = json_decode($request->getContent(), true);

        $em = $this->getDoctrine()->getManager();


        $person->setName($data["name"]);
        $person->setFirstname($data["firstname"]);
        $person->setPhone($data["phone"]);
        $person->setMail($data["mail"]);
        $person->setNote($data["note"]);

        try
        {
            if($this->checkIfExist($person)){
                throw new Exception("This person already exist");
            }
            $em->persist($person);
            $em->flush();
            return new JsonResponse(['result' => true,'customer' => $person],
                200);
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
        }

        return new JsonResponse(['error' => $error], 400);

    }

    private function checkIfExist(Person $person)
    {
        return false;
    }


}
