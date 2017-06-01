<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // 开启属性可填充
    protected $fillable=['title','completed'];

}
