<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Returned;
use Illuminate\Http\Request;

class ReturnedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $return = Returned::join('product', 'product.product_id', '=', 'return_product.product_id')
            ->select('product.*', 'return_product.*')
            ->orderBy('return_date', 'asc')
            ->get();
        return view('pages.return.returned',[
            'data_return' => $return
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $select = Product::where('product_barcode', $request->id_product)->get();

        $set = $select[0]->product_id;
        $unit = $select[0]->product_unit;

        Returned::insert([
            'return_unit' => $request->unit,
            'return_date' => $request->date,
            'product_id' => $set
        ]);

        Product::where('product_barcode', $request->id_product)
            ->update(['product_unit' => $unit + $request->unit]);

        return back()->with('status', 'Return Product Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Returned  $returned
     * @return \Illuminate\Http\Response
     */
    public function show(Returned $returned)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Returned  $returned
     * @return \Illuminate\Http\Response
     */
    public function edit(Returned $returned)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Returned  $returned
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $select = Product::where('product_barcode', $request->edit_Id)->get();

        $set = $select[0]->product_id;
        Returned::where('return_id',$request->edit_Id_return)
        ->update([
            'product_id'=>$set,
            'return_unit'=>$request->edit_unit,
            'return_date'=>$request->edit_date
        ]);
        return back()->with('status', 'Return Update Product Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Returned  $returned
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Returned::where('return_id', $request->id_delete)->delete();
        return back()->with('status', 'Delete Product Successfully');
    }
}
