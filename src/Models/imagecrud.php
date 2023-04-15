<?php

namespace Moduleimage\Path\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagecrud extends Model
{
    use HasFactory;
    public $table = 'imagecrud';
    protected $fileable = [
        'id',
        'images',
    ];
}
