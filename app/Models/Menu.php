<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
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
class Menu extends Model
{

    static $rules = [
        'platilloTitulo' => 'required|max:100',
        'platilloImagen' => 'required|mimes:jpg,bmp,png|max:250',
        'platilloDescripcion' => 'required|max:250',
        'platilloPrecio' => 'required|numeric',
        'platilloOferta' => 'nullable|numeric',
        'platilloStatus' => 'boolean',
    ];

    protected $perPage = 4;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['platilloTitulo', 'platilloImagen', 'platilloDescripcion', 'platilloPrecio', 'platilloOferta', 'platilloStatus'];
}
