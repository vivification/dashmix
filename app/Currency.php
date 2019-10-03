<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $table = 'f_currency';

    public $primaryKey = 'f_currency_id';

    public function account_currency(){

        return $this->belongsTo('App\Account', 'f_currency_id');

    }

}
