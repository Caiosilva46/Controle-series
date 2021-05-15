<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Serie extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function temporadas() 
    {
        return $this->hasMany(Temporada::class);
    }
}