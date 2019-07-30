<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuoteItems extends Model
{
    protected $table = 'f_quotes_items';

    protected $fillable = ['description', 'quote_id', 'product_id', 'name', 'quantity', 'price'];

}
