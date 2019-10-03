<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PriceLevel extends Model implements Auditable
{

    use \OwenIt\Auditing\Auditable;

    protected $table = 'f_price_level';

    public $primaryKey = 'f_price_level_id';

    protected $fillable = [

        'f_price_level_name',
        'f_price_level_parent',
        'f_price_level_reference',
        'f_price_level_created_by',
        'f_price_level_modified_by',
        'f_status',
        'f_description',
        'f_rate'
    ];

    public function account_price_level(){

        return $this->belongsTo('App\Account', 'f_price_level_id');

    }

}
