<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class suggest extends Model
{
    //意见反馈
    protected $table = 'suggest';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
