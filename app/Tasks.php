<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    protected $table = "tesks";
    protected $fillable = ['task'];
}
