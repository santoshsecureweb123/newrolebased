<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
   protected $table = 'skills';

   protected $fillable = [
        'skills_name',
    ];
}
