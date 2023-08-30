<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $table='u_devices';
    protected $fillable=[
        'uid',
        'type',
        'model',
        'serial_number',
        'purchase_price',
        'worker'
         
    ];
    /*
    protected function uid(): Attribute
    {
        return Attribute::make(
          set: fn(string $value) => uniqid(),
        );
    }
    */
}
