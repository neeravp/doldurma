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
        $this->call(UsersSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CatagoriesSeeder::class);
        $this->call(PostsSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(CategoryUserSeeder::class);
        $this->call(CategoryPostSeeder::class);
        $this->call(RoleUSerSeeder::class);
    }
}