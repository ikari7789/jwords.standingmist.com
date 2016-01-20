<?php

use Illuminate\Database\Seeder;
use JapaneseWords\Category;
use JapaneseWords\Word;

class CategoryWordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $words = Word::all();
        $categories = Category::all();
        foreach ($words as $word) {
            $categoryIndex = mt_rand(0, count($categories) - 1);
            $word->categories()->save($categories[$categoryIndex]);
        }
    }
}
