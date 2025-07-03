<?php
$pdo = new PDO(
    'mysql:host=localhost;dbname=faker_demo;charset=utf8',
    'root',
    ''
);

$counter = 0;

if ($counter <= 500) {
    require 'vendor/autoload.php';

    $faker = Faker\Factory::create('fr_FR');
    $test = $faker->name();
    $mail = $faker->email();
}