<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$posts = [
            ['title' => 'Origin', 'content' => 'Lorem ipsum dolor sit amet.'],
            ['title' => '1984', 'content' => 'Lorem ipsum dolor sit amet.'],
            ['title' => 'Steve Jobs', 'content' => 'Lorem ipsum dolor sit.']
    	];
        //insert data to database
        DB::table('posts')->insert($posts);
    }
}
