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
        Role::create([  //id:1
            'name'  => 'Portal Manager',
            'label' => 'is-portal-manager'
        ]);

        Role::create([  //id:2
            'name'  => 'Manager',
            'label' => 'is-manager'
        ]);

        Role::create([  //id:3
            'name'  => 'Editor',
            'label' => 'is-editor'
        ]);

        Role::create([  //id:4
            'name'  => 'Writer',
            'label' => 'is-writer'
        ]);
    }
}
