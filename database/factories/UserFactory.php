<?php

use App\User;
use App\Account;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'                              => $faker->name,
        'email'                             => $faker->unique()->safeEmail,
        'email_verified_at'                 => now(),
        'password'                          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token'                    => Str::random(10),
    ];
});

$factory->define(Account::class, function (Faker $faker) {
    return [
        'f_account_name'                   => $faker->company,
        'f_account_phone_primary'          => $faker->phoneNumber,
        'f_account_email_primary'          => $faker->unique()->safeEmail,
        'f_account_website'                => 'www.'.$faker->domainName,
        'f_account_address_street'         => $faker->streetAddress,
        'f_account_address_street_locale'  => $faker->postcode,
        'f_account_address_mailing'        => $faker->streetAddress,
        'f_account_address_mailing_locale' => $faker->postcode,
        'f_account_abn'                    => $faker->swiftBicNumber,
    ];
});
