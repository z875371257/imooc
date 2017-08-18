<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Home_User extends Model
{
//  User 用户模型 关联的那张表
    protected $table = 'home_user';

//  表主键
    protected $primaryKey = 'id';

//  是否维护  数据表的  create_at update_at 子段
    public $timestamps = false;

//  白名单
//        protected $fillable = [];

//  黑名单
    protected $guarded = [];

    /**
     * 获取与指定用户的详情。
     */
    public function details()
    {
        return $this->hasOne('App\Http\Model\Details', 'home_user_id', 'id');
    }

}
