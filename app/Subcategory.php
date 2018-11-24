<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  protected $fillable = [
      'name','category_id'
      // 'email', 'password', 'type_users_id'
  ];
  public function products()
  {
    return $this->hasMany(Product::class);
  }

}
