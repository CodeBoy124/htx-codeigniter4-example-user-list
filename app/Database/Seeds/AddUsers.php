<?php

namespace App\Database\Seeds;

use App\Models\Users;
use CodeIgniter\Database\Seeder;

class AddUsers extends Seeder
{
    public function run()
    {
        $user = new Users();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $user->save([
                "name" => $faker->name(),
                "email" => $faker->email()
            ]);
        }
    }
}
