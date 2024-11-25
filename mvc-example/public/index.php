<?php
require_once 'mvc-example/app/controllers/BookController.php';

$controller = new BookController();

$url = isset($_GET['url']) ? $_GET['url'] : 'books/index';

$controller->handleRequest($url);