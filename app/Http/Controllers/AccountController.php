<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\Input;
use Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account_add');
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


        $accounts_create =  Account::create([
            'account_name' => Input::get('account_name'),
            'contact_person' => Input::get('contact_person'),
            'phone_no' => Input::get('phone_no'),
            'email' => Input::get('email'),
            'address' => Input::get('address'),
            'city_id' => Input::get('city_id'),
            'region_id' => Input::get('region_id'),
            'account_manager_id' => Auth::user()->id,
            ]);
        $accounts_create->save();
        $accounts = Account::all();
        return view('crm',compact('accounts'));
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
        $accounts = Account::all();
        return view('crm',compact('accounts'));
    }



}
