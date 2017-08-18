<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    //  User 用户模型 关联的那张表
    protected $table = 'details';

//  表主键
    protected $primaryKey = 'id';

//  是否维护  数据表的  create_at update_at 子段
    public $timestamps = false;

//  白名单
//        protected $fillable = [];

//  黑名单
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Http\Model\Home_User','home_user_id','id');
    }
    
}
