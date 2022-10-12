<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumPictures extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'picture',
        'album_id',
        'user_id',
    ];
}
