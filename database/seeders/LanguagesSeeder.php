<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['name' => 'English', 'label' => 'english']);
        Language::create(['name' => 'French', 'label' => 'french']);
        Language::create(['name' => 'Hindi', 'label' => 'hindi']);
    }
}