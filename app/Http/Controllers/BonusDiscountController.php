<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BonusDiscount;
use App\Http\Resources\BonusDiscountResource;

class BonusDiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bonusDiscount = BonusDiscount::paginate(15);
        return $bonusDiscount;
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
        $bonusDiscount =BonusDiscount::create([
            'quantity'=>$request->quantity,
            'reason'=>$request->reason,
            'employee_id'=>$request->employee_id,
            'user_id'=>$request->user_id,
            'for_month'=>$request->for_month,
            'for_year'=>$request->for_year,
            'bonus_discount_category_id'=>$request->bonusDiscountCategory_id,

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bonusDiscount = BonusDiscount::findOrFail($id);
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
        //$bonusDiscount = BonusDiscount::where('id', $request->id)->update($request->only('name'));   
        $bonusDiscount = BonusDiscount::where('id', $request->id)->update($request->all());   
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
