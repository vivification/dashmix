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
        //create the Contact Record
        $contact = AccountContact::create($request->contact);

        //?????
        $account_data = $request->account;

        //Set the column 'f_account_contact_primary' from the Contact we created in $contact variable
        $account_data['f_account_contact_primary'] = $contact->f_contact_id;

        //Create the account
        $account = Account::create($account_data);

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
        $accounts = Account::with('account_type', 'account_status')->findOrFail($id);

        return view('accounts.edit', compact('accounts'));
    }


    public function update(Request $request, $id)
    {
        $accounts = Account::findorFail($id);
        //Previous
        //$accounts->accountname = $request->input('f_account_name');
        //Newly Added
        $accounts->f_account_name = $request->input('accountname');

        //save
        $accounts->save();

        //redirect
        return redirect('/accounts');
    }


    public function destroy($id)
    {
        //
    }
}
