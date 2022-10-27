<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $Nombre_del_Producto
 * @property $Codigo
 * @property $existencia
 * @property $Bodega
 * @property $Descripcion
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'Nombre_del_Producto' => 'required',
		'Codigo' => 'required',
		'existencia' => 'required',
		'Bodega' => 'required',
		'Descripcion' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_del_Producto','Codigo','existencia','Bodega','Descripcion','Estado'];



}
