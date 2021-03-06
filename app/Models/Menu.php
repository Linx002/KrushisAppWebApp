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
 * @property $platilloTipo
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
        'platilloImagen' => 'required|image|max:2500',
        'platilloDescripcion' => 'required|max:250',
        'platilloPrecio' => 'required|numeric',
        'platilloOferta' => 'nullable|numeric|lt:platilloPrecio',
        'platilloTipo' => 'required|max:20',
        'platilloStatus' => 'boolean',
    ];

    protected $perPage = 30;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['platilloTitulo', 'platilloImagen', 'platilloDescripcion', 'platilloPrecio', 'platilloOferta', 'platilloTipo', 'platilloStatus'];
}
