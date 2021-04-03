<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \DB::table('admins')->insert([
            'name' => 'Nguyễn Phúc Hưng',
            'email' => 'hungbbtbbt10@gmail.com',
            'password' => bcrypt('123'),

        ]);
    }
}
