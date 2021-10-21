<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class News
 *
 * @property $id
 * @property $noticiaTitulo
 * @property $noticiaTexto
 * @property $noticiaTipo
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class News extends Model
{
    
    static $rules = [
		'noticiaTitulo' => 'required',
		'noticiaTexto' => 'required',
		'noticiaTipo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['noticiaTitulo','noticiaTexto','noticiaTipo'];



}
