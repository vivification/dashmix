<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountContact extends Model
{
    protected $table = 'f_contact';

    public $primaryKey = 'f_contact_id';

    protected $fillable = [

    'f_contact_first_name',
	'f_contact_last_name',
	'f_contact_phone_main',
	'f_contact_phone_mobile',
	'f_contact_email',
	'f_contact_fax',
	'f_contact_address_street',
	'f_contact_address_street_locale',
	'f_contact_address_street_suburb',
	'f_contact_address_street_state',
	'f_contact_address_street_postcode',
	'f_contact_address_mailing',
	'f_contact_address_mailing_locale',
	'f_contact_address_mailing_suburb',
	'f_contact_address_mailing_state',
	'f_contact_address_mailing_postcode'
        ];


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
