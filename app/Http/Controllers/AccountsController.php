<?php

namespace App\Http\Controllers;

use App\Account;
use App\AccountContact;
use App\AccountType;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//         $accounts = Account::all();

//         return view('accounts.index');

        $accounts = Account::with('account_type', 'account_status', 'contact_primary')->get();

        return view('accounts.index', compact('accounts'));

    }

    public function create()
    {
        return view('accounts.create');
    }


    public function store(Request $request)
    {
        $contact = AccountContact::create($request->contact);

        $account = Account::create($request->account + ['f_account_contact_primary' => $contact->id]);

    }


    public function show($id)
    {

        /* No need to add get().  */
        $accounts = Account::with('account_type', 'account_status', 'contact_primary', 'contact_list')->find($id);

        return view('accounts.show', compact('accounts'));
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
}
