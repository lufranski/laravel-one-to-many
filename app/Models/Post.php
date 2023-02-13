<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'body'
    ];

    // Referenziare la table da cui è dipendente
    public function person(){

        return $this -> belongsTo(Person::class);
    }
}
