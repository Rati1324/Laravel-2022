<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $model
 * @property string $year
 * @property float $engine
 * @property float $levy
 * @property float $price
 */
class Car extends Model
{
    /**
     * @var array
     */
    public $timestamps = false;
    protected $fillable = ['name', 'model', 'year', 'engine', 'levy', 'price'];

}
