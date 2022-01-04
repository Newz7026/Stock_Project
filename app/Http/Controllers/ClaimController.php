<?php

namespace App\Http\Controllers;

use App\Models\Claim;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;



class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claim = Claim::join('product', 'product.product_id', '=', 'claim_product.product_id')
            ->select('product.*', 'claim_product.*')
            ->orderBy('claim_date', 'asc')
            ->get();
        return view('pages.claim.claim', [
            'data_claim' => $claim
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

        Claim::insert([
            'claim_name' => $request->name_claim,
            'claim_date' => $request->date_claim,
            'claim_note' => $request->note_claim,
            'claim_unit' => $request->unit_claim,
            'product_id' => $set
        ]);

        Product::where('product_barcode', $request->id_product)
            ->update(['product_unit' => $unit - $request->unit_claim]);

        return back()->with('status', 'Claim Product Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function show(Claim $claim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $select = Product::where('product_barcode', $request->edit_Id)->get();

        $set = $select[0]->product_id;
        DB::table('claim_product')
            ->where('claim_id', $request->edit_Id_claim)
            ->update([
                'claim_date' => $request->edit_date,
                'claim_note' => $request->edit_note,
                'claim_unit' => $request->edit_unit,
                'product_id' => $set,
                'claim_name' => $request->edit_name,
            ]);
        return back()->with('status', 'Update Product Successfully');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Claim $claim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Claim  $claim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Claim::where('claim_id', $request->id_delete)->delete();
        return back()->with('status', 'Delete Product Successfully');
    }
}
