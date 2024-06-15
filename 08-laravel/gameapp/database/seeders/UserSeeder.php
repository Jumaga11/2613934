<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Using ORM eloquent
        $user = new User;
        $user -> document  = 1053849706;
        $user -> fullname  = 'Sonia';
        $user -> gender    = 'Male';
        $user -> birthdate = '1996-05-03';
        $user -> phone     = '123456789';
        $user -> email     = 'user@user.com';
        $user -> password  = bcrypt('admin');
        $user -> role      = 'Administrator';
        $user -> save();

        $user = new User;
        $user -> document  = 75067810;
        $user -> fullname  = 'Juan Manuel Muñoz García';
        $user -> gender    = 'Male';
        $user -> birthdate = '1995-04-25';
        $user -> phone     = '123456789';
        $user -> email     = 'Tecnolojuancho@live.com';
        $user -> password  = bcrypt('admin');
        $user -> role      = 'Administrator';
        $user -> save();

        //Using DB Array
        DB::table('users')->insert([
            'document'  => 123456897,
            'fullname'  => 'Alana Lahana',
            'gender'    => 'Female',
            'birthdate' => '1990-12-21',
            'phone'     => '3105879640',
            'email'     => 'jumaga@hotmail.com',
            'password'  => bcrypt('123456'),
            'role'      => 'customer',
            'created_at'=> now(),
            'updated_at' => now()
        ]);
    }
}
