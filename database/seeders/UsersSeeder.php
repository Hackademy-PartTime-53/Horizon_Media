<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([ 
            'name'=>'Sara',
            'email'=>'sara@mail.com',
            'password'=>Hash::make('12345678'),
            'age'=>'32',
            'gender'=>'femmina',
            'marital status'=>'sposata',
            'taste'=>'Starbuks, Sushi',
            'newspapers'=>'Corriere.it, Leggo',
            'car'=>'Fiat Panda',
            'movie&music'=>'Musica classica, teatro',
            'sites'=>'SEOsitecheckup, facebook, instagram ',
            'hobbies'=>'lettura, viaggi',
            'attitudes'=>'affarista',
            'job'=>'Ghostwriter, Articolista freelance',
        ]);
    }
}
