<?php

namespace App\Controller;

use App\Entity\Racket;
use App\Entity\TennisString;
use App\Form\TennisStringType;
use Exception;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        $racket = new Racket();

        $data = json_decode($request->getContent(), true);

        $em = $this->getDoctrine()->getManager();
        $date = new DateTime();

        if (isset($data["idRacket"])){
            $idRacket = $data["idRacket"];
            $racket = $em->getRepository('App:Racket')->find($idRacket);
        }

        $string->setDate(new DateTime($date->format("Y/m/d")));
        $string->setBrand($data["brand"]);
        $string->setModel($data["model"]);
        $string->setGauge($data["gauge"]);
        $string->setCrossTension($data["crossTension"]);
        $string->setLongTension($data["longTension"]);
        $string->setIdRacket($racket);

        try
        {
            if($this->checkIfExist($string)){
                throw new Exception("This string already exist");
            }
            $em->persist($string);
            echo("persist");
            $em->flush();
            echo("flush");
            return new JsonResponse(['result' => true,'session' => $string], 200);
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
        }

        return new JsonResponse(['error' => $error], 400);

    }

    private function checkIfExist(TennisString $string)
    {
        return false;
    }
}
