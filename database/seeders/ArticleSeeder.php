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
        'title'=> 'L\'impatto dell\' Intelligenza sul lavoro futuro' ,
        'subtitle'=> 'Come le tecnologie emergenti stanno trasformando il mondo professionale ',
        'body'=>'negli ultimi anni , l\'intelligenza artificiale (ha rivoluzionato diversi settori.)',
        'image'=>"IA.jpg",
        'user_id'=>1,
        'category_id'=>6,

    ]);

     Article::create
        ([
        'title'=> 'Olimpiadi Milano Cortina 2026 - caos trasporti' ,
        'subtitle'=> 'Grandi problemi sui trasporti',
        'body'=>'Purtroppo sulle olimpiadi non abbiamo molte cose da dire. Il sistema di territorio si è mosso con grave ritardo, solo all\'ultimo anno, il tavolo sulla mobilità si sta muovendo. Parole importanti pronunciate da Gabriele Mariani. ',
        'image'=>"Olimpiadi.jpg",
        'user_id'=>1,
        'category_id'=>4,

    ]);
     Article::create
        ([
        'title'=> 'Avengers' ,
        'subtitle'=> 'Avangers: Doomsday e Secret Wars posticipano la data di uscita al cinema',
        'body'=>'Disney sta apportando delle modifiche al suo calendario di uscita, posticipando entrambi i progetti Marvel',
        'image'=>"pexels-cottonbro-8721318.jpg",
        'user_id'=>1,
        'category_id'=>5,

    ]);
}
    
}
