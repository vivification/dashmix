<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AccountType;
use App\AccountStatus;
use App\Http\Middleware;


class Account extends Model
{
    protected $table = 'f_accounts';

    protected $fillable = [

        'f_account_name',
        'f_account_type',
        'f_account_contact_primary',
        'f_account_phone_primary',
        'f_account_email_primary',
        'f_account_website',
        'f_account_address_street',
        'f_account_address_street_locale',
        'f_account_address_mailing',
        'f_account_address_mailing_locale',
        'f_account_status',
        'f_account_created',
        'f_account_created_by',
        'f_account_abn',
        'f_account_description'
    ];

    public $primaryKey = 'id';

    public function account_status(){
        // Needs to return relation
        // 2nd Parameter: foreignKey corresponds to the primary key of the table you want to link.
        // 3rd Parameter: localKey is the key in (accounts) table that connects to other table (technically speaking foreign key)
        return $this->hasOne('App\AccountStatus', 'f_account_status_id', 'f_account_status');

    }

    public function account_type(){

        return $this->hasOne('App\AccountType','f_account_type_id', 'f_account_type');

    }

    public function contact_primary(){

        return $this->hasOne('App\AccountContact', 'f_contact_id', 'f_account_contact_primary' );

    }

    public function contact_list(){

        return $this->hasOne('App\AccountContact', 'f_contact_id', 'id' );

    }



}
