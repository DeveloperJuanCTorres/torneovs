<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    protected $fillable = [
        'direccion',
        'numero_contacto',
        'otro_numero_contacto',
        'email',
        'ubicacion'
    ];
}
