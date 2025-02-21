<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'videos';

    protected $primaryKey = 'id_video';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_video',
        'link_video',
        'title_video',
    ];
}
