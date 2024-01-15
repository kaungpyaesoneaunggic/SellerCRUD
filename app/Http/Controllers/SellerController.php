<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use Illuminate\Http\Request;

class SellerController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except(['index', 'show']);
    }
    // public function __destruct(){
    //     return 1;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sellers=Seller::all();
        return view("seller.index",compact("sellers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("seller.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSellerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSellerRequest $request)
    {
        //
        $seller=new Seller();
        $seller->name=$request->name;
        $seller->township=$request->township;
        $seller->rating= $request->rating;
        $seller->save();
        return redirect()->route('seller.index')->with('success','');
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
        $seller=Seller::findOrFail($id);
        return view('seller.detail',compact('seller'));
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
        $seller=Seller::findOrFail($id);
        return view('seller.edit',compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSellerRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSellerRequest $request, $id)
    {
        //
        $seller=Seller::findOrFail($id);
        $seller->name=$request->name;
        $seller->township=$request->township;
        $seller->rating=$request->rating;
        $seller->update();
        return redirect()->route('seller.index')->with('success','');
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
        $seller=Seller::findorFail($id);
        if($seller){
            $seller->delete();
            return redirect()->route('seller.index')->with('success','');
        }
    }
}
