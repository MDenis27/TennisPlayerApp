<?php

namespace App\Controller;

use App\Entity\Racket;
use App\Entity\TennisString;
use App\Form\TennisStringType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class APIAddStringController extends AbstractController
{
    /**
     * @Route("/api/addstring", name="api_create_string", methods={"POST"})
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function index(Request $request)
    {
        $string = new TennisString();

        $data = json_decode($request->getContent(), true);

        $em = $this->getDoctrine()->getManager();
        $date = new DateTime($data["Date"]);

        $string->setDate(new DateTime($date->format("Y/m/d")));

    }
}
