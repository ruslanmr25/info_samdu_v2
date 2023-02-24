<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        $roles=['student_staff','rector','dean','tutor','super_admin'];

        foreach($roles as $role){

            $role = Role::create(
                [
                    'role' => $role
                ]
            );
            $user=User::create([
                'name'=>$role->role,
                'email'=>$role->role.'@gmail.com',
                'password'=>Hash::make('123456789')
            ]);
            $user->roles()->attach($role->id);
        }

        $this->call(FacultySeeder::class);


    }
}
