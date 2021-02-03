<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                [
                    'title' => "nustiu",
                    'description' => "dasdasdas",
                    'content' => "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    'alias' => "nustiu",
                    'img' => "img1.jpg",
                    'meta_key' => "1312312",
                    'meta_desc' => "DSDSAD@@#!"
                ],
                [
                    'title' => "nustiu2",
                    'description' => "dasdas2das",
                    'content' => "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                    'alias' => "nustiu2",
                    'img' => "img2.jpg",
                    'meta_key' => "3142312",
                    'meta_desc' => "D231SDSAD@@#!"           
                ]
            ]
        );
    }
}
