<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $type = DB::table('type_product')->orderBy('type_id', 'asc')->get();
        $product = DB::table('inventory')
            ->join('product', 'product.product_id', '=', 'inventory.product_id')
            ->join('type_product', 'type_product.type_id', '=', 'product.type_id')
            ->select('product.*', 'inventory.*', 'type_product.*')
            ->orderBy('product.product_id', 'asc')
            ->get();

        return view('pages.inventory.index', [
            'data_product' => $product,
            'type' => $type
        ]);
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
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Inventory $inventory)
    {




        $type = DB::table('type_product')->orderBy('type_id', 'asc')->get();
        $product = DB::table('inventory')
            ->join('product', 'product.product_id', '=', 'inventory.product_id')
            ->join('type_product', 'type_product.type_id', '=', 'product.type_id')
            ->select('product.*', 'inventory.*', 'type_product.*')
            ->orderBy('product.product_id', 'asc')
            ->where('product_barcode', $request->barcode_product)
            ->get();
        return view('pages.inventory.inventory_add', [
            'data' => $product,
            'type' => $type
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        // echo $request;
        DB::table('inventory')
            ->where('inventory_id', $request->id_product)
            ->update([
                'inventory_unit' => $request->unit_product,
                'inventory_date' => $request->date_product,
                'updated_at' => now()
            ]);

        return back()->with('status', 'Update Product Successfully!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $select = Product::where('product_barcode', $request->barcode_product)->get();
        $set = $select[0]->product_id;

        DB::table('inventory')
            ->insert([
                'inventory_unit' => 1,
                'inventory_date' => $request->date,
                'product_id' => $set
            ]);

        if ($select[0]->product_unit >= 1) {
            DB::table('product')
                ->where('product_barcode', $request->barcode_product)
                ->where('product_status', 1)
                ->update([
                    'product_unit' => DB::raw('product_unit - 1')

                ]);
        } else {
            DB::table('product')
                ->where('product_barcode', $request->barcode_product)
                ->where('product_status', 1)
                ->update([
                    'product_status' => 2,
                    'product_unit' => DB::raw('product_unit - 1')

                ]);
        }



        $selects = Product::where('product_barcode', $request->barcode_product)->get();
        return view('pages.inventory.inventory_add', ['data' => $selects]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        DB::table('product')
            ->where('product_id', $request->id_product)
            ->update(['product_unit' => DB::raw('product_unit + 1')
        ]);

        DB::table('inventory')->where('inventory_id', $request->id)->delete();
        return back()->with('status', 'Delete Product Successfully');
    }
}
