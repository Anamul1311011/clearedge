<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['heading', 'sub_heading', 'details', 'banner_image'];
}
