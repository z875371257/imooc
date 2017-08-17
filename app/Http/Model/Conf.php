<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Conf extends Model
{
    //网站配置Model
    protected $table = 'conf';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
