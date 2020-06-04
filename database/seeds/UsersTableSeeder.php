<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,20)->create();

        Role::create([
            'name'      => 'Admin',
            'slug'      => 'admin',
            'special'   => 'all-access'
        ]);

        App\User::create([
            'name' => 'Brayan Vilchez Daga',
            'email' => 'bm_vd_1605@hotmail.com',
            'password' => bcrypt('123456')
        ])->roles()->attach([1]);
    }
}
