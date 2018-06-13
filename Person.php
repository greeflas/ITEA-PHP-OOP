<?php

class Person
{
    const OBJECTS_LIMIT = 3;

    private static $counter = 0;

    private $firstName = 'unnamed';
    private $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;

        self::$counter++;

        if (self::$counter === self::OBJECTS_LIMIT) {
            throw new \Exception('Cannot create class object!');
        }
    }

    public function __destruct()
    {
        echo 'Person objects was created: ' . self::$counter . PHP_EOL;
    }

    // pubsf + tab
    // prosf + tab
    // prisf + tab

    // pubf + tab
    // prof + tab
    // prif + tab

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

    public function __toString()
    {
        return 'Full name: ' . $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }
}

$person = new Person('Vasya', 'Petrov');
var_dump($person->getFirstName(), $person->getLastName());

$person->setFirstName('Vasya');
$person->setLastName('Petrov');

var_dump($person->getFirstName());
var_dump($person->getLastName());

$person2 = new Person('Nastya', 'Rezova');

echo $person;
