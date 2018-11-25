<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purcharse extends Model
{
    use SoftDeletes;
    protected $fillable =
          ['user_id','transaction_date','charge'];
    protected $dates = ['deleted_at'];

    public function purchases_detail()
    {
    	return $this->hasMany(PurchaseDetails::class);
    }
}
