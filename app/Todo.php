<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public $fillable = ['name', 'priority', 'done', 'user_id'];

    public $casts = ['done' => 'bool'];
}
