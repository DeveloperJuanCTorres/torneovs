<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;
    protected $table = 'events';

    protected $fillable = [
        'name',
        'description',
        'date_start',
        'date_end',
        'banner_url',
        'torneo_url',
        'status',
        'price',
        'link_youtube',
        'bases',
        'pay',
        'banner_mobil_url',
        'count',
        'date_event_start',
        'date_event_end'
    ];
}
