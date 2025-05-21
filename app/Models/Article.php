<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titolo',
        'sottotitolo',
        'corpo del testo',
        'immagine di copertina',
        'user_id',
        'categoria_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
