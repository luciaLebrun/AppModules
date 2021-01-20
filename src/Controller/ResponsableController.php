<?php


namespace App\Controller;

use App\Entity\Module;
use App\Repository\ModuleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * Class ResponsableController
 * @package App\Controller
 * @Route("/responsables")
 */
class ResponsableController
{
    /**
     * @Route(name="api_responsables_collection_get", methods={"GET"})
     * @param ModuleRepository $moduleRepository
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function collection(ModuleRepository $moduleRepository, SerializerInterface $serializer): JsonResponse
    {
        return new JsonResponse(
            $serializer->serialize($moduleRepository->findAll(), "json", ["groups" => "responsable"]),
            JsonResponse::HTTP_OK,
            [],
            true
        );
    }

    /**
     * @Route("/{id}", name="api_responsables_item_get", methods={"GET"})
     * @param Module $module
     * @param SerializerInterface $serializer
     * @return JsonResponse
     */
    public function item(Module $module, SerializerInterface $serializer): JsonResponse
    {
        return new JsonResponse(
            $serializer->serialize($module, "json", ["groups" => "responsable"]),
            JsonResponse::HTTP_OK,
            [],
            true
        );
    }

    /**
     * @Route(name="api_responsables_collection_post", methods={"POST"})
     * @param Module $module
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     * @param UrlGeneratorInterface $urlGenerator
     * @param ValidatorInterface $validator
     * @return JsonResponse
     */
    public function post(
        Module $module,
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager,
        UrlGeneratorInterface $urlGenerator,
        ValidatorInterface $validator
    ): JsonResponse {
        //$Module->addModule($entityManager->getRepository(Module::class)->findOneBy([]));

        $errors = $validator->validate($module);

        if ($errors->count() > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->persist($module);
        $entityManager->flush();
        return new JsonResponse(
            $serializer->serialize($module, "json", ["groups" => "responsable"]),
            JsonResponse::HTTP_CREATED,
            ["Location" => $urlGenerator->generate("api_responsable_item_get", ["id" => $module->getId()])],
            true
        );
    }

    /**
     * @Route("/{id}",name="api_responsables_item_put", methods={"PUT"})
     * @param Module $module
     * @param SerializerInterface $serializer
     * @param EntityManagerInterface $entityManager
     * @param ValidatorInterface $validator
     * @return JsonResponse
     */
    public function put(
        Module $module,
        SerializerInterface $serializer,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): JsonResponse {
        $errors = $validator->validate($module);

        if ($errors->count() > 0) {
            return new JsonResponse($serializer->serialize($errors, 'json'), JsonResponse::HTTP_BAD_REQUEST, [], true);
        }

        $entityManager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);

    }

    /**
     * @Route("/{id}", name="api_responsable_item_delete", methods={"DELETE"})
     * @param Module $module
     * @param EntityManagerInterface $entityManager
     * @return JsonResponse
     */
    public function delete(
        Module $module,
        EntityManagerInterface $entityManager
    ): JsonResponse {

        $entityManager->remove($module);
        $entityManager->flush();

        return new JsonResponse(null, JsonResponse::HTTP_NO_CONTENT);
    }

}