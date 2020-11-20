<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserAcess;
use Faker\Generator as Faker;

$factory->define(UserAcess::class, function (Faker $faker) {
    return [
        'last_login'   => date('Y-m-d H:i:s'),
        'users_id'     => '1'
    ];
});
