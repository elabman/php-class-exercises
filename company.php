<?php
    class Company{
        private $companyId;
        private $companyName;
        private $email;
        private $phone;

        /** Constructor */

        public function __construct(){

        }

        /**
         * getters and setters
         */

        public function setName($companyName){
            $this->companyName = $companyName;
        }

        public function getName(){
            return $this->companyName;
        }
    }


?>