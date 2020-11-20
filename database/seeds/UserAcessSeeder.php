<?php

use Illuminate\Database\Seeder;
use App\UserAcess;

class UserAcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(UserAcess::class, 50)->create();
    }
}
