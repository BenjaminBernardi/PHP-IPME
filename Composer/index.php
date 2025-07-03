<?php

require 'vendor/autoload.php';

$faker = Faker\Factory::create('fr_FR');
$test = $faker->name();
$mail = $faker->email();

echo $test;
echo '<br>';
echo $mail;