<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    protected $fillable = ['heading', 'details', 'image', 'sideimage'];
}
