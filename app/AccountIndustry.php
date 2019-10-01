<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountIndustry extends Model
{
    protected $table = 'f_account_industry';

    public $primaryKey = 'id';

    public function account(){

        return $this->belongsTo('App\Account', 'id');

    }


}
