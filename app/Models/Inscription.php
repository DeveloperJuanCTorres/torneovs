<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Inscription extends Model
{
    use HasFactory;
    protected $table = 'inscriptions';

    protected $fillable = [
        'event_id',
        'apoderado',
        'status',
        'imagen_url',
        'vinculo',
        'user_id',
        'equipo'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
