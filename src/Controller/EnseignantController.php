<?php


namespace App\Controller;

use App\Entity\Enseignant;
use App\Entity\Module;
use App\Repository\EnseignantRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

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
     * @param Enseignant $enseignant
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     * @param UrlGeneratorInterface $urlGenerator
     * @param ValidatorInterface $validator
     * @return JsonResponse
     */
    public function post(
        Enseignant $enseignant,
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator,
        ValidatorInterface $validator
    ): JsonResponse {
        //$enseignant->addModule($entityManager->getRepository(Module::class)->findOneBy([]));

        $errors = $validator->validate($enseignant);

        if ($errors->count() > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

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
     * @Route("/{id}",name="api_enseignants_item_put", methods={"PUT"})
     * @param Enseignant $enseignant
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     * @param ValidatorInterface $validator
     * @return JsonResponse
     */
    public function put(
        Enseignant $enseignant,
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): JsonResponse {
        $errors = $validator->validate($enseignant);

        if ($errors->count() > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);

    }

    /**
     * @Route("/{id}", name="api_enseignants_item_delete", methods={"DELETE"})
     * @param Enseignant $enseignant
     * @param EntityManagerInterface $entityManager
     * @return JsonResponse
     */
    public function delete(
        Enseignant $enseignant,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $entityManager->remove($enseignant);
        $entityManager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }

}