<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // 开启属性可填充
    protected $fillable=['title','content','published_at','user_id'];

    // 保存到数据库前对published_at做处理
    public function setPublishAtAttribute($date) {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    // 自定义查询限定方法
    public function scopePublished($query) {
        $query->where('published_at','<=',Carbon::now());
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
