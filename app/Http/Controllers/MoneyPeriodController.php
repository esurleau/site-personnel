<?php

namespace App\Http\Controllers;

use App\MoneyPeriod;
use Illuminate\Http\Request;

class MoneyPeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$moneyPeriod = Auth::user()->periods();
        
        //return view('money_periods.index',compact('moneyPeriod'));  
        return view('home');
    }
    
    public function showLast(){
        //$moneyPeriod=Auth::user()->periods()->last();
        //return redirect()->route('home');
        return view('home');
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
     * @param  \App\MoneyPeriod  $moneyPeriod
     * @return \Illuminate\Http\Response
     */
    public function show(MoneyPeriod $moneyPeriod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MoneyPeriod  $moneyPeriod
     * @return \Illuminate\Http\Response
     */
    public function edit(MoneyPeriod $moneyPeriod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MoneyPeriod  $moneyPeriod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MoneyPeriod $moneyPeriod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MoneyPeriod  $moneyPeriod
     * @return \Illuminate\Http\Response
     */
    public function destroy(MoneyPeriod $moneyPeriod)
    {
        //
    }
}
