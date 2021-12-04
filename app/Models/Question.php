<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{

    protected $table = 'question';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}
