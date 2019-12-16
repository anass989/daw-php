<?php

class Customer {
    private $id;
    private $name;
    private $last_name;
    private $email;

    public function __construct($id, $name, $last_name, $email) {
        $this->id = $id;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }
}

?>