<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Option;
use Auth;

class PoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = Poll::get();
        $options = Option::get();

        return view('/poll/layout' , compact('polls', 'options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poll = new Poll;

        $poll->question = request('question');
        $poll->description = request('description');
        $poll->nr_of_options = request('nr_of_options');
        
        return view('/poll/create' , compact('poll'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poll = new Poll;

        $poll->question = request('question');
        $poll->description = request('description');
        $poll->nr_of_options = request('nr_of_options');
        //$poll->user_id = Auth::id();
        $poll->user_id = 1;
        $poll->save();

        return redirect()->route('option.form', ['poll_id' =>$poll->id , 'num' => $poll->nr_of_options ]);
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
        $poll = Poll::findOrFail($id);

        return view('poll/edit', compact('poll'));
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
        $poll = Poll::findOrFail($id);


        $poll->update($request->all());

        return redirect(action('PoleController@index'));
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
