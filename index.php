<?php

/**
 * Autoload the classes
 *
*/
require_once 'vendor/autoload.php';

/**
 * Import the classes
 *
*/
use App\Person;

/**
 * Create a new instance of the Person class and example the methods
 *
*/
$person = new Person('John Doe', 30, 'men');

echo "name: {$person->getName()}";
echo '<br>';
echo "age: {$person->getAge()}";
echo '<br>';
echo "gender: {$person->getGender()}";

echo '<hr>';

$person->setName('Jefferson Oliveira');
$person->setAge(21);
$person->setGender('men');

echo "name: {$person->getName()}";
echo '<br>';
echo "age: {$person->getAge()}";
echo '<br>';
echo "gender: {$person->getGender()}";
