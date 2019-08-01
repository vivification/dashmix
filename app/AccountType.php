<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountType extends Model
{
    protected $table = 'f_account_type';

    public $primaryKey = 'f_account_type_id';

    protected $fillable = ['f_account_type_name'];

    public function account(){

        // Needs to return relation
        // 2nd Parameter: foreignKey corresponds to the primary key of the table you want to link.
        // 3rd Parameter: localKey is the key in (f_account_type) table that connects to other table (technically speaking foreign key)

        return $this->belongsTo('App\Account', 'f_account_type_id');

    }

}
