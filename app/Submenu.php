<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = ['mitem_id', 'page_id'];

    public function pageinfo(){
      return $this->hasOne('App\Page', 'id', 'page_id');
    }

    public function menuinfo(){
      return $this->hasOne('App\Menu', 'id', 'mitem_id');
    }
}
