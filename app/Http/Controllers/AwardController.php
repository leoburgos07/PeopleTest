<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Award;
use App\Models\Benefit;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $awards = Award::where('quantity','>',0)
        ->orderBy('name', 'ASC')->paginate(3);
        
        return view('listAwards', compact(
            'awards'
        ));
    }

    /**
     * Assign a Award to persons
     * 
     * @return \Illuminate\Http\Response
     */

     public function assignAward(Request $request){ 
        Benefit::create([
            'name' => $request['inputName'],
            'lastName' => $request['inputLastName'],
            'address' => $request['inputAddress'],
            'phone' => $request['inputPhone'],
            'email' => $request['inputEmail'],
            'awards_id' => $request['award']
        ]);

        $award = Award::find($request['award']);
        $award->quantity = $award->quantity - 1;

        $award->save();

        return redirect('/awards');

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
    public function store(Request $request)
    {
        //
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
}
