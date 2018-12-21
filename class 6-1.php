<?php
/**
 * Created by PhpStorm.
 * User: gre327
 * Date: 2018-12-19
 * Time: 오후 7:33
 */

class Person
{
    var $name;

    function Person($name)
    {
        $this->setName($name);
    }
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }
}

function changeName($person, $name)
{
    $person->setName($name);
}

$person = new Person("Andi");
changeName($person, "Zeev");

print $person->getName();

?>