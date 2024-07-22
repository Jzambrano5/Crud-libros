<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Lib
 *
 * @property $id
 * @property $titulo
 * @property $genero
 * @property $year_publicacion
 * @property $id_autor
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Lib extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['titulo', 'genero', 'year_publicacion', 'id_autor'];


}
