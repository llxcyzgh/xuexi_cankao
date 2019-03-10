<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Xuexi extends Model
{
    protected $table = 'xuexi';

    protected $fillable = [
        'question', 'answer', 'category', 'second_category', 'type'
    ];
}
