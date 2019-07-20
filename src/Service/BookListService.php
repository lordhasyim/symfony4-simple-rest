<?php

namespace App\Service;

use App\Entity\Book;
use App\Repository\BookRepository;

class BookListService
{
    /**
     * @var BookRepository
     */
    protected $booksRepository;

    public function __construct(BookRepository $repo)
    {
        $this->booksRepository = $repo;
    }

    /**
     * @return Book[]
     */
    public function get(): array
    {
        return $this->booksRepository->findAll();
    }
}