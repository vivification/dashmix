<?php

namespace App\Http\Controllers;

use App\PriceLevel;
use Illuminate\Http\Request;

class PriceLevelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo 'hello';

        $pricelevel = PriceLevel::all();

        return view('pricelevels.index', compact('pricelevel'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pricelevels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pricelevels = new PriceLevel();

        $pricelevels->f_price_level_name =  $request->input('f_price_level_name');
        $pricelevels->status             =  $request->input('status');

        $pricelevels->save();

        return redirect('/price-levels');

    }


    public function show($id)
    {
        $audits = PriceLevel::find(1)->audits;

        $pricelevels = PriceLevel::findOrFail($id);

        return view('pricelevels.show', compact('pricelevels', 'audits'));
    }


    public function edit($id)
    {
        $pricelevels = PriceLevel::findorFail($id);

        return view('pricelevels.edit', compact('pricelevels'));
    }


    public function update(Request $request, $id)
    {
        $pricelevels = PriceLevel::findorFail($id);

        $pricelevels->f_price_level_name        = $request->input('name');
        $pricelevels->f_description             = $request->input('description');
        $pricelevels->f_rate                    = $request->input('rate');
        $pricelevels->f_status                  = $request->input('status');

        $pricelevels->save();

        return redirect('/price-levels');






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
}
