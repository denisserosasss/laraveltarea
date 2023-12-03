<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Factura
 *
 * @property $id
 * @property $fecha
 * @property $Número_de_factura
 * @property $Nombre
 * @property $Número_de_cliente
 * @property $correo
 * @property $Direccion
 * @property $Estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Factura extends Model
{
    
    static $rules = [
		'fecha' => 'required',
		'Número_de_factura' => 'required',
		'Nombre' => 'required',
		'Número_de_cliente' => 'required',
		'correo' => 'required',
		'Direccion' => 'required',
		'Estado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['fecha','Número_de_factura','Nombre','Número_de_cliente','correo','Direccion','Estado'];



}
