<?php 

    class UserModel {

        private int $id;
        private string $username;
        private string $email;
        private string $password;
        private string $phone;
        private string $adress;
        private string $name;

        public function setId(int $id) {
            $this->id = $id;
        }

        public function getId(): int {
            return $this->id;
        }

        public function setUsername(string $username){
            $this->username = $username;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setEmail(string $email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }

        public function setPassword(string $password){
            $this->password = $password;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPhone(string $phone) {
            $this->phone = $phone;
        }

        public function getPhone() {
            return $this->phone;
        }

        public function setAdress(string $adress) {
            $this->adress = $adress;
        }

        public function getAdress() {
            return $this->adress;
        }

        public function setName(string $name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

    }