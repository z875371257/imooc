<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
   protected $table = 'home_user';

   protected $primaryKey = 'id';

   public $timestamps = false;

//   protected $fillable = [];

   protected $guarded = [];

}
