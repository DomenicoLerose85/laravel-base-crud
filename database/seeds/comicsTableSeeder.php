<?php

use Illuminate\Database\Seeder;
use App\Comic;

class comicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config('comics');
        $newComic = new Comic();
        $newComic->title = 'title';
        $newComic->description = 'description';
        $newComic->image = 'image';
        $newComic->price = 'price';
        $newComic->series = 'series';
        $newComic->sale_date = 'sale_date';
        $newComic->type = 'type';
        $newComic->save();
    }
}
