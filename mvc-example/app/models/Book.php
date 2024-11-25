<?php

class Book {
    private $books = [];

    public function __construct() {
        // Inisialisasi dengan beberapa data
        $this->books = [
            ['id' => 1, 'title' => 'Buku 1'],
            ['id' => 2, 'title' => 'Buku 2'],
        ];
    }

    public function getAllBooks() {
        return $this->books;
    }

    public function addBook($title) {
        $this->books[] = ['id' => count($this->books) + 1, 'title' => $title];
    }
}