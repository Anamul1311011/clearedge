<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product_name', 'product_title', 'product_ID', 'product_detail', 'product_image'];
}
