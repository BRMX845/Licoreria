<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Shopping
 *
 * @property $id
 * @property $numero_compra
 * @property $fecha_compra
 * @property $producto_id
 * @property $cantidad
 * @property $precio_unitario
 * @property $precio_total
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Shopping extends Model
{
    
    static $rules = [
		'numero_compra' => 'required',
		'fecha_compra' => 'required',
		'producto_id' => 'required',
		'cantidad' => 'required',
		'precio_unitario' => 'required',
		'precio_total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_compra','fecha_compra','producto_id','cantidad','precio_unitario','precio_total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'producto_id');
    }
    

}
