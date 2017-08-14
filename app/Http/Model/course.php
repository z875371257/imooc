<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = false;
}
