<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Detail extends Model
{
    use HasFactory;
    protected $table = 'details';

    protected $fillable = [
        'event_id',
        'description',
        'imagen1_url',
        'imagen2_url',
        'link_facebook',
        'link_instagran',
        'link_tiktok',
        'link_youtube',
    ];
}
