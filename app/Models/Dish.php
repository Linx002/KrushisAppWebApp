<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dish
 *
 * @property $id
 * @property $platilloTitulo
 * @property $platilloImagen
 * @property $platilloDescripcion
 * @property $platilloPrecio
 * @property $platilloOferta
 * @property $platilloStatus
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dish extends Model
{
    
    static $rules = [
		'platilloTitulo' => 'required',
		'platilloImagen' => 'required',
		'platilloDescripcion' => 'required',
		'platilloPrecio' => 'required',
		'platilloOferta' => 'required',
		'platilloStatus' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['platilloTitulo','platilloImagen','platilloDescripcion','platilloPrecio','platilloOferta','platilloStatus'];



}
