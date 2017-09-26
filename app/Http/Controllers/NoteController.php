<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use DB;
use Session;



class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notesjoin=DB::select('select * from accounts join notes on bus.accounts.account_id = bus.notes.account_id');

        return view('notes', compact('notesjoin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //building drop down list
        $accountlist = \DB::table('accounts')->pluck('account_name', 'account_id');
        $accountlist = ['0' => 'Select an Account'] + collect($accountlist)->toArray();
        return view('notes.create')->with('accountlist', $accountlist);
        // return view('notes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // validate the data
        //https://laravel.com/docs/5.4/validation#available-validation-rules

        $this->validate($request, array(
            'title'=> 'required|max:255',
            'description' => 'required',
            'account_id' => 'required',
            ));
        

        //store the database

$notes = new Note;

$notes -> title = $request->title;
$notes -> description = $request->description;
$notes -> phone_no = $request->phone_no;
$notes -> account_id = $request->account_id;

$notes ->save();

Session::flash('success','New note record saved!');


        //redirect to another page
       return redirect()->route('notes.index');

      //  return redirect()->route('notes.show', $notes->id);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //not using it for now. sending to the index view to see all.
        $notes = Note::find($id);
        return view('notes.show')->with('note', $notes);
    }

    /**
     * Show the form for editing the specified resource.
     *   
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Display the form to update

        
        //find the post in the database and save in the variable
        $notes = Note::find($id);

        //making account list for the dropdown
        $accountlist = \DB::table('accounts')->pluck('account_name', 'account_id');
        $accountlist = ['0' => 'Select an Account'] + collect($accountlist)->toArray();
        // return view('notes.create')->with('accountlist', $accountlist);

        //return the view pass in the variable
        return view('notes.edit')->with('note', $notes)->with('accountlist', $accountlist);
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
        // validate the data

        $this->validate($request, array(
            'title'=> 'required|max:255',
            'description' => 'required',
            'account_id' => 'required',
            ));


        // Save the data to the database

        $notes = Note::find($id);

        $notes -> title = $request->input('title');
        $notes -> description = $request->input('description');
        $notes -> phone_no = $request->input('phone_no');
        $notes -> account_id = $request->input('account_id');

        $notes ->save();


        // set the flash message with Success Data

        Session::flash('success', 'Note record is updated.');


        //redirect with flash data on note page
        return redirect()->route('notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $notes = Note::find($id);
        $notes->delete();

        Session::flash('success', 'Note record deleted!');
        return redirect()->route('notes.index');
    }

    public function display()
    {
        $notes = Note::all();
        return view('notes',compact('notes'));
    }

    public function notesjoin(){

        $notesjoin=DB::select('select * from accounts join notes on bus.accounts.account_id = bus.notes.account_id');

        return view('notes', compact('notesjoin'));
    }
}
