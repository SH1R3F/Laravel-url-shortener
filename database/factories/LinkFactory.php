<?php

use Faker\Generator as Faker;
use Tuupola\Base62;

$factory->define(\App\Link::class, function (Faker $faker) {
    $base62 = new Base62;
    $hash   = $base62->encode(random_bytes(1) . (\App\Link::count()+1));
    return [
        'url' => $faker->unique()->url,
        'hash' => $hash,
        'user_id' => rand(1, 10)
    ];
});
