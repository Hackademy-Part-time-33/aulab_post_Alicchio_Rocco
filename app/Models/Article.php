<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;
use App\Models\Image;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title', 'subtitle', 'body', 'image', 'user_id',  'category_id', 'is_accepted', 'slug'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray() {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'category' => $this->category,
        ];

        
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function readDuration(){
        // contiamo il numero delle parole presenti all’interno del corpo del nostro articolo;
        $totalWords = Str::wordCount($this->body);
        // // andiamo ad arrotondare per eccesso i minuti che ci vogliono per leggere il testo (la media di una persona scolarizzata è
        // di 200 parole al minuto). Questo ci restituirà però un dato di tipo float
        $minutesToRead = round($totalWords / 200);

        // recupera il valore intero di una data variabile.

        return intval($minutesToRead);
    }
  
}



