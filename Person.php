<?php

class Person
{
    private $firstName = 'unnamed';
    private $lastName;

    // pubf + tab

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setFirstName($firsName)
    {
        $this->firstName = $firsName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
}

$person = new Person();

$person->setFirstName('Vasya');
$person->setLastName('Petrov');

var_dump($person->getFirstName());
var_dump($person->getLastName());
