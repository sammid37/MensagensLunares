<?php

use Faker\Generator as Faker;

$factory->define(App\Mensagem::class, function (Faker $faker) {
  $categoria = [
    '1',
    '2',
    '3'
  ];
    return [
      'titulomensagem' => str_random(10),
      'corpomensagem' => str_random(100),
      'categoriamensagem' => $categoria[rand(0,2)],
      'user_id' => function () {
            return factory(App\User::class)->create()->id;}
      
    ];
});
