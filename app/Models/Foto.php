<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    protected $table = 'fotos';
    protected $primaryKey = 'id_foto';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_foto',
        'path_foto',
    ];
}
