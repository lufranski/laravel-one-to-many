<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'mail'
    ];

    // Referenziare le tabelle con cui People Table ha relazioni
    public function personDetail(){

        return $this -> hasOne(PersonDetail::class);
    }

    public function posts() {

        return $this -> hasMany(Post::class);
    }
}
