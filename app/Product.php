<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    protected $fillable =
          ['name','product_code','type_id','size','color','is_popular','price','price_list',    'quantity','description','category_id', 'subcategory_id','trademark'];
    protected $dates = ['deleted_at'];
    // protected $dates = [];

    public function type()
    {
    	//return $this->belongsTo(Genre::class, 'foreing_key', 'id');
    	return $this->belongsTo(Type::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

    public function category()
    {
    	//return $this->belongsToMany(Actor::class, 'tabla_de_relacion', 'foreing_key', 'id');
    	return $this->belongsTo(Category::class);
    }
    public function subcategory()
    {
      //return $this->belongsToMany(Actor::class, 'tabla_de_relacion', 'foreing_key', 'id');
      return $this->belongsTo(SubCategory::class);
    }
}
