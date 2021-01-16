<?php


namespace App\Controller;

use App\Entity\Enseignant;
use App\Repository\EnseignantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class EnseignantController
 * @package App\Controller
 * @Route("/enseignants")
 */
class EnseignantController
{
    /**
     * @Route(name="api_enseignants_collection_get", methods={"GET"})
     * @param EnseignantRepository $enseignantRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function collection(EnseignantRepository $enseignantRepository, SerializerInterface $serializer): JsonResponse
    {
        return new JsonResponse(
            $serializer->serialize($enseignantRepository->findAll(), "json", ["groups" => "get"]),
            JsonResponse::HTTP_OK,
            [],
            true
        );
    }

    /**
     * @Route("/{id}", name="api_enseignants_item_get", methods={"GET"})
     * @param Enseignant $enseignant
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function item(Enseignant $enseignant, SerializerInterface $serializer): JsonResponse
    {
        return new JsonResponse(
            $serializer->serialize($enseignant, "json", ["groups" => "get"]),
            JsonResponse::HTTP_OK,
            [],
            true
        );
    }

    /**
     * @Route(name="api_enseignants_collection_post", methods={"POST"})
     * @param Request $request
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     * @param UrlGeneratorInterface $urlGenerator
     * @return JsonResponse
     */
    public function post(
        Request $request,
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator
    ): JsonResponse {
        /** @var Enseignant $enseignant */
        $enseignant = $serializer->deserialize($request->getContent(), Enseignant::class, 'json');

        $entityManager->persist($enseignant);
        $entityManager->flush();

        return new JsonResponse(
            $serializer->serialize($enseignant, "json", ["groups" => "get"]),
            JsonResponse::HTTP_CREATED,
            ["Location" => $urlGenerator->generate("api_enseignants_item_get", ["id" => $enseignant->getId()])],
            true
        );
    }

    /**
     * @param Enseignant $enseignant
     * @param Request $request
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function put(Enseignant $enseignant, Request $request, SerializerInterface $serializer): JsonResponse
    {
        $serializer->deserialize(
            $request->getContent(),
            Enseignant::class,
            'json',
            [AbstractNormalizer::OBJECT_TO_POPULATE => $enseignant]
        );

        return new JsonResponse(
            $serializer->serialize($enseignant, "json", ["groups" => "get"]),
            JsonResponse::HTTP_CREATED,
            [],
            true
        );
    }
}