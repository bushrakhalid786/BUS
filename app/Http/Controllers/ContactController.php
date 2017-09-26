<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Account;
use Illuminate\Support\Facades\Input;
use Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::all();
        return view('contact_add',compact('accounts'));
        //return view('contact_add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        // $x=Input::all(); 
       // return $x;


        $contacts_create =  Contact::create([
            
            'contact_name' => Input::get('contact_name'),
            'designation' => Input::get('designation'),
            'phone_no' => Input::get('phone_no'),
            'email' => Input::get('email'),
            'address' => Input::get('address'),
            'account_id' => Input::get('account_id'),
            'account_type_id' => Input::get('account_type_id'),
            

            ]);
        $contacts_create->save();
        
        $contacts = Contact::all();
        return view('contacts',compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function display()
    {
        $contacts = Contact::all();
        return view('contacts',compact('contacts'));
    }

    public function accountlist()
    {

        $accounts = Account::all();
        return view('contact_add',compact('accounts'));
    }
}
