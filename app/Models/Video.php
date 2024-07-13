<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';

    protected $fillable = [
        'participante_id',
        'evento_id',
        'imagen_url',
        'link_video',
    ];
}
