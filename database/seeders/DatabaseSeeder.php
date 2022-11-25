<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(50)->create();
         \App\Models\Banner::factory(50)->create();
         \App\Models\Brand::factory(50)->create();

        \App\Models\Category::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
        DB::table('users')->insert([
            //Admin
            [
                'full_name'=>"admin",
                'username'=>"admin",
                'email'=>"admin@gmail.com",
                'password'=>Hash::make('1234'),
                'role'=>"admin"
            ],
            //customar
            [
                'full_name'=>"customar",
                'username'=>"customar",
                'email'=>"customar@gmail.com",
                'password'=>Hash::make('1234'),
                'role'=>"customar"
            ],
            //vendor
            [
                'full_name'=>"vendor",
                'username'=>"vendor",
                'email'=>"vendor@gmail.com",
                'password'=>Hash::make('1234'),
                'role'=>"vendor"
            ]
        ]);


    }
}
