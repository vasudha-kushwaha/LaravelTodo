<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        'heading'=>$faker->realText($maxNbChars =10, $indexSize = 2),
        'tags'=>$faker->word,
        'content'=>$faker->word,
        'writer'=>$faker->word
    ];
});
