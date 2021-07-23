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
            $article->title = $faker->sentence(5);
            $article->subtitle = $faker->sentence();
            $article->date = $faker->dateTimeInInterval('-2 years', '+1 days');
            $article->author = $faker->lastName();
            $post->image = $faker->imageUrl(600, 300, 'Posts', true, $post->title);
            $article->text = $faker->paragraphs(7, true);
            $article->save();
        }
    }
}
