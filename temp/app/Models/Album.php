<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    //protected $table = 'albums';
    //public $primaryKey = 'id';

    public function artists() {
        return $this->belongsTo(Artist::class);
    }
}
