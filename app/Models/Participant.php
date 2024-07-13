<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Participant extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = [
        'event_id',
        'name',
        'apoderado',
        'voucher_url',
        'status',
        'dni',
        'avatar_url',
        'email',
        'vinculo',
    ];
}
