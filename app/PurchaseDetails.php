<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseDetails extends Model
{
     use SoftDeletes;
     protected $table = 'purcharses_detail';
    protected $fillable =
          ['purcharse_id','product_id','quantity', 'unit_price', 'tax'];
    protected $dates = ['deleted_at'];

    public function purchases_detail()
    {
    	return $this->belongsTo(Purchase::class);
    }
}
