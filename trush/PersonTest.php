<?php

use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testReturnsFullName()
    {
        require('src/Person.php');

        $person = new Person;

        $person->first_name = "Taro";
        $person->last_name = "Yamada";

        $this->assertEquals('Taro Yamada', $person->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $person = new Person;
        $this->assertEquals('', $person->getFullName());
    }
}