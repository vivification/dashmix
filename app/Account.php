<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AccountType;
use App\AccountStatus;


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

    public function account_status(){

        $this->hasOne(AccountStatus::class, 'f_account_status', 'f_account_status_id');

    }

    public function account_type(){

        $this->hasOne('App\AccountType', 'f_account_type');

    }


}
