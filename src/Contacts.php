<?php
    class Contact
    {
        private $name;
        private $number;
        private $address;
        private $email;
        private $image;

        function __construct($contact_name, $contact_number, $contact_address, $contact_email, $contact_image) {
            $this->name = $contact_name;
            $this->number = $contact_number;
            $this->address = $contact_address;
            $this->email = $contact_email;
            $this->image = $contact_image;
        }

        function setName($contact_name) {
            $this->name = (string) $contact_name;
        }
        function getName() {
            return $this->name;
        }

        function setNumber($contact_number) {
            $this->number = (int) $contact_number;
        }
        function getNumber() {
            return $this->number;
        }

        function setAddress($contact_address) {
            $this->address = (string) $contact_address;
        }
        function getAddress() {
            return $this->address;
        }

        function setEmail($contact_email) {
            $this->email = (string) $contact_email;
        }
        function getEmail() {
            return $this->email;
        }

        function setImage($contact_image) {
            $this->image = (string) $contact_image;
        }
        function getImage() {
            return $this->image;
        }

        function save() {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll() {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll() {
            $_SESSION['list_of_contacts'] = array();
        }

    }
?>
