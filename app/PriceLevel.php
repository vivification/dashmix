<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PriceLevel extends Model
{
    protected $table = 'f_price_level';

    public $primaryKey = 'f_price_level_id';

    public function account_price_level(){

        return $this->belongsTo('App\Account', 'f_price_level_id');

    }

}
