<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create
        ([
        'title'=> 'impatto dellintelligenza sul lavoro futuro' ,
        'subtitle'=> 'Come le tecnologie emergenti stanno trasformando il mondo professionale ',
        'body'=>'negli ultimi anni , lintelligenza artificiale (ha rivoluzionato diversi settori.)',
        'image'=>"storage/app/public/images/horizon_cover.jpg",
        'user_id'=>1,
        'category_id'=>6,

    ]);
}
    
}
