<?php

use Illuminate\Database\Seeder;
use App\Models\Example\Movie;

class MoviesSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Movie::class, 100)->create();
        factory(Comision::class, 100)->create();
    }
}
