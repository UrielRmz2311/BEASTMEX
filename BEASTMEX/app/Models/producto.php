<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'productos';

    protected $fillable = [
        // Asegúrate de incluir aquí los campos que se pueden asignar masivamente
        'noserie', 'marca', 'cantidad', 'costodecompra', 'preciodeventa', 'fechaingreso', 'fotoproducto'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($producto) {
            // Calcula el precio de venta aumentando un 55% al costo de compra
            $producto->preciodeventa = $producto->costodecompra * 1.55;
        });
        static::updating(function ($producto) {
            if ($producto->isDirty('costodecompra')) {
                // Si el campo de costo de compra ha sido modificado, recalcula el precio de venta
                $producto->preciodeventa = $producto->costodecompra * 1.55;
            }
        });
    }
}