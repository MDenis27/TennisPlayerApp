<?php

namespace App\Controller;

use App\Entity\Person;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class APIHomeController extends AbstractController
{
    /**
     * @Route("/api", name="homeapi", methods={"GET"})
     * @return JsonResponse
     */
    public function index()
    {

        $encoder = new JsonEncoder();
        $defaultContext = [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object, $format, $context) {
                return $object->getId();
            },
        ];
        $normalizer = new ObjectNormalizer(null, null, null, null, null, null, $defaultContext);

        $serializer = new Serializer([$normalizer], [$encoder]);
        $em = $this->getDoctrine()->getManager();
        $people = $em->getRepository('App:Person')->findAll();
        $jsonContent = $serializer->serialize($people,'json');
        $response = new JsonResponse();
        $response->setContent($jsonContent);
        return $response;
    }

    /**
     * @Route("/api/person/{id}", name="homeDeleteapi", methods="DELETE")
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function deletePerson(Request $request, $id){

        try
        {
            $em = $this->getDoctrine()->getManager();
            $person = $em->getRepository('App:Person')->find($id);
            $em->remove($person);
            $em->flush();
            return new JsonResponse(['result' => true],
                200);
        }
        catch(Exception $e)
        {
            $error = $e->getMessage();
        }

        return new JsonResponse(['error' => $error], 400);
    }

    /**
     * @Route("/api/delete/{id}", name="homePersonapi", methods="GET")
     * @param $id
     * @return JsonResponse
     */
    public function displayPerson($id){

        $encoder = new JsonEncoder();
        $defaultContext = [
            AbstractNormalizer::CIRCULAR_REFERENCE_HANDLER => function ($object, $format, $context) {
                return $object->getId();
            },
        ];
        $normalizer = new ObjectNormalizer(null, null, null, null, null, null, $defaultContext);

        $serializer = new Serializer([$normalizer], [$encoder]);
        $em = $this->getDoctrine()->getManager();
        $person = $em->getRepository('App:Person')->find($id);
        $jsonContent = $serializer->serialize($person,'json');
        $response = new JsonResponse(); $response->setContent($jsonContent);
        return $response;
    }

}
