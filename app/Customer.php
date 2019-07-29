<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'f_customers';

    protected $fillable = ['companyname', 'name', 'address', 'postcode', 'city', 'state', 'country', 'postcode', 'phone', 'email'];

}
