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
        //get the audit log for this model
        $audits = Account::find(1)->audits;


        /* No need to add get().  */
        $accounts = Account::with('account_type', 'account_status', 'account_industry', 'contact_primary', 'account_currency', 'price_level', 'contact_list')->find($id);

        return view('accounts.show', compact('accounts','audits' ));
    }

    public function editprimarycontact($id)
    {


    }


    public function edit($id)
    {
        //B.K 02-10-2019
        //if I use GET I get an error
        //$accounts = Account::with('account_type', 'account_status')->get($id);

        //if I use findOrFailed - works but still cannot get AccountType
        //I also try firstOrFail but results in error "select 1 from f_accounts"
        $accounts = Account::with('account_type', 'account_status')->findOrFail($id);

        $account_types = AccountType::all();

        return view('accounts.edit', compact('accounts', 'account_types'));
    }


    public function update(Request $request, $id)
    {

        $accounts = Account::findorFail($id);

        $accounts->f_account_name                   = $request->input('accountname');
        $accounts->f_account_address_street         = $request->input('accountaddress');
        $accounts->f_account_phone_primary          = $request->input('accountphone');
        $accounts->f_account_fax                    = $request->input('accountfax');
        $accounts->f_account_email_primary          = $request->input('accountemail');
        $accounts->f_account_website                = $request->input('accountwebsite');
        $accounts->f_account_abn                    = $request->input('accountabn');
        $accounts->f_account_vendor                 = $request->input('accountvendor');
        $accounts->f_account_type                   = $request->input('accounttype');
        $accounts->f_account_status                 = $request->input('accountstatus');

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
