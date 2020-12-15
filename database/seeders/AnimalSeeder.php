<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'name' => 'Fluffy', 
            'age'=> 6, 
            'bio'=> 'Fan of walks and bones', 
            'species' => 'Dog', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => 'an-image'
        ]);
        Animal::create([
            'name' => 'Bob', 
            'age'=> 9, 
            'bio'=> ' like hiding in boxes', 
            'species' => 'Cat', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => 'an-image',
            
        ]);
        Animal::create([
            'name' => 'Wilma', 
            'age'=> 12, 
            'bio'=> 'Love carpentry', 
            'species' => 'Woodpecker', 
            'likes' => 0, 
            'dislikes' => 0, 
            'image_url' => 'an-image',
            
        ]);
  
    }
}
