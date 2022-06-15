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
        $newComic = new comic();

        $newComic->save();
    }
}
