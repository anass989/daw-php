<?php

class Book {
    private $author;
    private $title;
    private $isbn;

    public function __constructor($author, $title, $isbn) {
        $this->author = $author;
        $this->title = $title;
        $this->isbn = $isbn;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setIsbn($isbn) {
        $this->isbn = $isbn;
    }
}

?>