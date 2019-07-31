<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Quote;
use App\QuoteItems;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::with('customer', 'user')->get();

        return view('quotes.index', compact('quotes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user = Auth::user();

        $customer = Customer::create($request->customer);

        $quote = Quote::create($request->quote + ['user_id' => $user->id] + ['customer_id' => $customer->id] + ['quote_number' => (new Quote)->getNextOrderNumber()] + ['status' => 'Unapproved']);

        for ($i=0; $i < count($request->product); $i++) {
            if (isset($request->qty[$i]) && isset($request->price[$i])) {
                QuoteItems::create([
                    'quote_id' => $quote->id,
                    'name' => $request->product[$i],
                    'description' => $request->description[$i],
                    'quantity' => $request->qty[$i],
                    'price' => $request->price[$i],
                ]);
            }

        }

        return redirect('/quotes');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quote_id)
    {
        $quote = Quote::with('customer', 'user')->findOrFail($quote_id);

        return view('quotes.show', compact('quote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function download($quote_id){
        //
        $quote  = Quote::findorFail($quote_id);

        //return view('quotes.pdf', compact('quote'));

        $pdf    = \PDF::loadView('quotes.pdf', compact('quote'));
        return $pdf->stream('quote.pdf');



    }

}
