<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class uploadimg extends Model
{
    use HasFactory;

    protected $table = 'uploadimgs';
    protected $fillable = [
        'name',
    ];
}
