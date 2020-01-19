<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'App Icons',
                'description' => 'App icons are just the collection of the regular based softare icons includes the Libre Office, Microsoft Office icons, Windows Icons, Operating System icons etc.',
            ], [
                'id' => 2,
                'name' => 'Anime Icons',
                'description' => 'Anime icons includes the collection of the top story manga shows icons'
            ], [
                'id' => 3,
                'name' => 'Cool Icons',
                'description' => 'Cool icons are just the collections of top collections of 3d vector design icons, potraits icons, monument icons etc.'
            ], [
                'id' => 4,
                'name' => 'Girls Icons',
                'description' => '<p>Girls Icons is a beautiful collection of the Hollywood actress Icons, Bollywood icons, Cute girls icons, Asian girls icons.</p>'
            ], [
                'id' => 5,
                'name' => 'Movie Icons',
                'description' => '<p>Movie icons are just the icon collection of the movies including all movies includes the hollywood movies, bollywood movies and many more.</p>'
            ], 
        ];

        Category::insert($categories);
    }
}
