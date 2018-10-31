<?php 
    class Person{
        // can set to private, public, or protected
        private $name;
        private $email;
        private static $ageLimit = 18;
        public static $upperAgeLimit = 20;

        public function __construct($name, $email){
            $this->name = $name;
            $this->email = $email;
            echo __CLASS__.' Created<br>';
        }

        public function __destruct(){
           echo __CLASS__.' destroyed<br>';
        }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name.'<br>';
        }
        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email.'<br>';
        }

        public static function getAgeLimit(){
            return self::$ageLimit;
        }
    }

    echo Person::$upperAgeLimit.'<br>';
    echo Person::getAgeLimit();

    // $person1 = new Person('Kaeleb Drew', 'Kaeleb@gmail.com');
    // $person1->setName('Kaleeb Drew');
    
    // $person1->name = 'Drew Beaupre';
    // echo $person1->getName();

    class Customer extends Person{
        private $balance;

        public function __construct($name, $email, $balance){
            parent::__construct($name, $email, $balance);
            $this->balance = $balance;
            echo 'A new '.__CLASS__.' has been created<br>';
        }

        public function setBalance($balance){
            $this->balance = $balance;
        }

        public function getBalance(){
            return $this->balance.'<br>';
        }
    }

    // $customer1 = new Customer('Dick Chaney', 'Chaney@gmail.com', 300);

    // echo $customer1->getBalance();

?>