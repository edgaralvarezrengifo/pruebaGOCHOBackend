<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
     protected $fillable = ['description', 'status','expiration_date','user_id'];
}
