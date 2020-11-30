<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'  => 'Portal Manager',
            'label' => 'is-portal-manager'
        ]);

        Role::create([
            'name'  => 'Editor',
            'label' => 'is-editor'
        ]);

        Role::create([
            'name'  => 'Manager',
            'label' => 'is-manager'
        ]);

        Role::create([
            'name'  => 'Writer',
            'label' => 'is-writer'
        ]);
    }
}