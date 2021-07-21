<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $article = new Article();
            $article->title = $faker->words(4, true);
            $article->subtitle = $faker->sentence();
            $article->date = $faker->dateTimeInInterval('-2 years', '+1 days');
            $article->author = $faker->lastName();
            $article->five_w = $faker->words(2, true);
            $article->how_text = $faker->paragraphs(6, true);
            $article->save();
        }
    }
}
