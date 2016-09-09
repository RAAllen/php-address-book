<?php
    class Contact
    {
        private $name;
        private $number;
        private $street;
        private $city;
        private $state;
        private $zip;

        function __construct($contact_name, $contact_number, $contact_street, $contact_city, $contact_state, $contact_zip) {
            $this->name = $contact_name;
            $this->number = $contact_number;
            $this->street = $contact_street;
            $this->city = $contact_city;
            $this->state = $contact_state;
            $this->zip = $contact_zip;
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

        function setStreet($contact_street) {
            $this->street = (string) $contact_street;
        }
        function getStreet() {
            return $this->street;
        }

        function setCity($contact_city) {
            $this->city = (string) $contact_city;
        }
        function getCity() {
            return $this->city;
        }

        function setState($contact_state) {
            $this->state = (string) $contact_state;
        }
        function getState() {
            return $this->state;
        }

        function setZip($contact_zip) {
            $this->zip = (string) $contact_zip;
        }
        function getZip() {
            return $this->zip;
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
