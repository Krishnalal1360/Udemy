<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use App\Models\Address;
use App\Models\Post;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',a
        ]);*/

        //

        //User::factory()->count(10)->create();
        //
        //Product::factory()->count(10)->create();
        //
        /*User::factory()->count(10)
                         ->has(Product::factory()->count(2))
                         ->has(Address::factory()->count(1))
                         ->create();*/
        //
        $posts = Post::factory()->count(10)->create();
        //
        $tags = Tag::factory()->count(10)->create();
        //
        foreach($posts as $post){
            //
            $post->tags()->attach($tags->random(2));
        }
    }
}
