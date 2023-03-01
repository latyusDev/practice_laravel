<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\User;
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
        
       

        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'john doe',
            'email' => 'john@gmail.com',
        ]);
        
        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);
        // Listing::create([
        //         'title' => 'Senior Dveloper',
        //         'tags' =>'laravel, javascript',
        //         'company' =>'LatTech',
        //         'location' =>'43, Memudu',
        //         'email' =>'yunusabdullateef@gmail.com',
        //         'website' =>'kfkfkfkffkfkfkfkfkk',
        //         'description' =>' Lorem ipsum dolor sit amet consectetur
        //          adipisicing elit.  Cumque qui alias a, nobis ipsa omnis, 
        //          consequatur fugiat   architecto ea dolorem modi reprehenderit
        //           expedita! Adipisci   veniam ipsum reiciendis rem enim sunt?
                
        //         '
        // ],);

        // Listing::create(
        //     [
        //         'title' => 'Junior Dveloper',
        //         'tags' =>'laravel, java',
        //         'company' =>'LatTech',
        //         'location' =>'43, Memudu',
        //         'email' =>'yunus@gmail.com',
        //         'website' =>'kfkfkfkffkfkfkfkfkk',
        //         'description' =>' Lorem ipsum dolor sit amet consectetur
        //          adipisicing elit.  Cumque qui alias a, nobis ipsa omnis, 
        //          consequatur fugiat   architecto ea dolorem modi reprehenderit
        //           expedita! Adipisci   veniam ipsum reiciendis rem enim sunt?
                
        //         '
        //     ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
