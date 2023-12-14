<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $id
 * @property $numero_venta
 * @property $fecha_venta
 * @property $producto_id
 * @property $cantidad
 * @property $precio_total
 * @property $created_at
 * @property $updated_at
 *
 * @property Product $product
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    
    static $rules = [
		'numero_venta' => 'required',
		'fecha_venta' => 'required',
		'producto_id' => 'required',
		'cantidad' => 'required',
		'precio_total' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_venta','fecha_venta','producto_id','cantidad','precio_total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->hasOne('App\Models\Product', 'id', 'producto_id');
    }
    

}
