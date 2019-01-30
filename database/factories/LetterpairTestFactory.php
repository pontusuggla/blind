<?php

use Faker\Generator as Faker;
use App\Letterpair;

$factory->define(App\LetterpairTest::class, function (Faker $faker) {
    $started_at = strtotime('-2 week') + rand(0, 60 * 60 * 24 * 14);

    return [
        'letterpair_id' => Letterpair::inRandomOrder()->first()->id,
        'started_at' => date('Y-m-d H:i:s', $started_at),
        'ended_at' => date('Y-m-d H:i:s', $started_at + rand(3, 20)),
        'success' => (bool) rand(0, 1)
    ];
});
