<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
    // protected $table = 'genres';
    // public $primaryKey = 'id';

    // public function album(){
    //     return $this->belongsToMany(Album::class, 'genres_album');
    // }
    public $timestamps = false;
}
