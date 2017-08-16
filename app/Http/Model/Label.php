<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class label extends Model
{
    protected $table = 'label';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
