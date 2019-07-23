<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountStatus extends Model
{
    protected $table = 'f_account_status';

    public function account(){

        $this->belongsTo('App\Account', 'f_account_status');

    }

}
