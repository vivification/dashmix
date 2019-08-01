<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'f_quotes';

    protected $fillable = ['user_id', 'job_number', 'description', 'quote_number', 'quote_date', 'customer_id', 'tax_percent', 'status', 'terms'];


    public function user(){

        return $this->belongsTo(User::class);

    }

    public function customer(){

        return $this->belongsTo(Customer::class);

    }

    public function quote_items(){

        return $this->hasMany(QuoteItems::class);
    }

    public function  getTotalAmountAttribute(){

        $total_amount = 0;
        foreach ($this->quote_items as $item) {
            $total_amount += $item->price * $item->quantity;
        }
        return $total_amount;

    }

    public function getNextOrderNumber()
    {
        // Get the last created order
        $lastOrder = Quote::orderBy('created_at', 'desc')->first();

        if ( ! $lastOrder )
            // We get here if there is no order at all
            // If there is no number set it to 0, which will be 1 at the end.

            $number = 0;
        else
            $number = substr($lastOrder->quote_number, 3);

        // If we have ORD000001 in the database then we only want the number
        // So the substr returns this 000001

        // Add the string in front and higher up the number.
        // the %05d part makes sure that there are always 6 numbers in the string.
        // so it adds the missing zero's when needed.

        return 'RTQ' . sprintf('%06d', intval($number) + 1);
    }

}
