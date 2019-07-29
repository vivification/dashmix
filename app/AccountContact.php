<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountContact extends Model
{
    protected $table = 'f_contact';

    public $primaryKey = 'f_contact_id';

    public function primarycontact(){

        // Needs to return relation
        // 2nd Parameter: foreignKey corresponds to the primary key of the table you want to link.
        // 3rd Parameter: localKey is the key in (f_contact) table that connects to other table (technically speaking foreign key)

        return $this->belongsTo('App\Account','f_account_id', 'f_contact_id');

}

    public function additionalcontacts(){

        return $this->hasMany('App\Account', 'f_account_id', 'f_contact_id');

    }

}
