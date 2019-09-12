<?php

namespace App\Controller;

use App\Service\BookListService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;


class BookController extends AbstractController
{
    /**
     * @Route("/books", name="books")
     * @param BookListService $listService
     * @return JsonResponse
     */
    public function index(BookListService $listService, SerializerInterface $serializer)
    {
        //dump($listService);
        // i add this, for changes
        $books = $listService->get();
        
        return new JsonResponse(
            $serializer->serialize($books, 'json'),
            200,
            [],
            true
        );
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/BookController.php',
        // ]);
    }
}
