<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurcharseDetails extends Model
{
     use SoftDeletes;
    protected $fillable =
          ['purchase_id','product_id','quantity', 'unit_price'];
    protected $dates = ['deleted_at'];

    public function purchases_detail()
    {
    	return $this->belongsTo(Purchase::class);
    }
}
