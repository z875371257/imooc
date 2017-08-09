<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'cid';
    protected $guarded = [];
    public $timestamps = false;
}
