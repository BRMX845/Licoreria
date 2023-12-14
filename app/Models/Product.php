<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $created_at
 * @property $updated_at
 * @property $nombre_producto
 * @property $marca
 * @property $tipo_licor
 * @property $precio
 * @property $imagen
 *
 * @property Sale[] $sales
 * @property Shopping[] $shoppings
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'nombre_producto' => 'required',
		'marca' => 'required',
		'tipo_licor' => 'required',
		'precio' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre_producto','marca','tipo_licor','precio','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'producto_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shoppings()
    {
        return $this->hasMany('App\Models\Shopping', 'producto_id', 'id');
    }
    

}
