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

    public function account_industry(){

        return $this->hasOne('App\AccountIndustry','id', 'id');

    }

    public function account_currency(){

        return $this->hasOne('App\Currency', 'f_currency_id', 'f_account_currency');

    }

    public function price_level()
    {

        return $this->hasOne('App\PriceLevel', 'f_price_level_id', 'f_account_price_level');

    }

    public function contact_primary(){

        return $this->hasOne('App\AccountContact', 'f_contact_id', 'f_account_contact_primary' );

    }

    public function contact_list(){

        // It should be hasMany instead of hasOne
        // Also you added f_contact_id
        // So your query was roughly like "Select * from accounts,contact where accounts.id=contact.contact_id (which is totally wrong)
        // you need to put reference of the key that is the actual foreign key which is `f_contact_reference`
        return $this->hasMany('App\AccountContact', 'f_contact_reference', 'id' );

    }



}
