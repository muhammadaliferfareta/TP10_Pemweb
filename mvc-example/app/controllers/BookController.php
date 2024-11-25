<?php

require_once '../models/Book.php';

class BookController {
    private $bookModel;

    public function __construct() {
        $this->bookModel = new Book();
    }

    public function handleRequest($url) {
        $parts = explode('/', $url);
        $action = isset($parts[1]) ? $parts[1] : 'index';

        switch ($action) {
            case 'add':
                $this->addBook();
                break;
            case 'index':
            default:
                $this->listBooks();
                break;
        }
    }

    public function listBooks() {
        $books = $this->bookModel->getAllBooks();
        require '../views/book_list.php';
    }

    public function addBook() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $this->bookModel->addBook($title);
            header('Location: /mvc-example/public/index.php?url=books/index');
        } else {
            require '../views/add_book.php';
        }
    }
}