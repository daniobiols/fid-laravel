<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name','product_code','product_type','size','color','is_popular','price','price_list',    'quantity','description','image','categories_id', 'subcategories_id'];

    // protected $dates = [];

    public function genre()
    {
    	//return $this->belongsTo(Genre::class, 'foreing_key', 'id');
    	return $this->belongsTo(Genre::class);
    }

    public function image()
    {
        return $this->hasOne(Image::class);
    }

    public function actors()
    {
    	//return $this->belongsToMany(Actor::class, 'tabla_de_relacion', 'foreing_key', 'id');
    	return $this->belongsToMany(Actor::class);
    }
}
