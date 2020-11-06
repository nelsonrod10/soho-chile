<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'empresa',
        'nombre_proyecto',
        'descripcion',
        'tags',
        'logo',
        'imagen',
    ];
}
