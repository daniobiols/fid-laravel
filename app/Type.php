<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
  protected $fillable = [
      'name'
      // 'email', 'password', 'type_users_id'
  ];
  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
