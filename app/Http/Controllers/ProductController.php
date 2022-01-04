<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use function Psy\debug;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = DB::table('type_product')->orderBy('type_id', 'asc')->get();
        $product = DB::table('product')
            ->join('type_product', 'product.type_id', '=', 'type_product.type_id')
            ->select('product.*', 'type_product.*')
            ->where('product_status', 1)
            ->where('product_unit', '>',0)
            ->orderBy('product_id', 'asc')
            ->get();

        return view('pages.product.index', [
            'data_product' => $product,
            'type' => $type
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = DB::table('type_product')->orderBy('type_id', 'asc')->get();
        return view('pages.product.product_add', [
            'type' => $type
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = new Product();
        $insert->product_barcode = $request->id_product;
        $insert->product_name = $request->name_product;
        $insert->product_cost = $request->cost_product;
        $insert->product_sell_price = $request->sell_product;
        $insert->product_sku = $request->sku_product;
        $insert->product_unit = $request->unit;
        $insert->type_id = $request->type_id;

        if ($request->hasFile('image')) {
            $newfilename = Str::random(10) . '.' . $request->image->extension();
            $request->image->storeAs('product', $newfilename, 'public');
            $insert->product_img = $newfilename;
        }

        $insert->created_at = now();
        $insert->save();

        return back()->with('status', 'Add New Product Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        if ($request->hasFile('image')) {
            $newfilename = Str::random(10) . '.' . $request->image->extension();
            $request->image->storeAs('product', $newfilename, 'public');

            DB::table('product')
                ->where('product_id', $request->id_product)
                ->update([
                    'product_barcode' => $request->barcode_product,
                    'product_name' => $request->name_product,
                    'product_img' => $newfilename,
                    'product_cost' => $request->cost_product,
                    'product_unit' => $request->unit_product,
                    'product_sell_price' => $request->sell_product,
                    'type_id' => $request->type,
                    'updated_at' => now()
                ]);
        } else {
            DB::table('product')
                ->where('product_id', $request->id_product)
                ->update([
                    'product_barcode' => $request->barcode_product,
                    'product_name' => $request->name_product,
                    'product_cost' => $request->cost_product,
                    'product_unit' => $request->unit_product,
                    'product_sell_price' => $request->sell_product,
                    'type_id' => $request->type,
                    'updated_at' => now()
                ]);
        }
        return back()->with('status', 'Update Product Successfully!!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product  $product)
    {
    }

    public function update_status(Request $request)
    {

        DB::table('product')->where('product_id', $request->id)->delete();
        return back()->with('status', 'Delete Product Successfully');
    }

    public function show_unit(Request $request)
    {

        if ($request->barcode_product == "") {
            $data = DB::table('product')->where('product_barcode', $request->barcode_product)->get();
            return view('pages.product.unit_add', [
                'data' => $data
            ]);
        } else

        $data = Product::where('product_barcode', $request->barcode_product)->get();
            Product::where('product_barcode', $request->barcode_product)
            ->increment('product_unit', 1);

        return view('pages.product.unit_add', [
            'data' => $data
        ]);
    }
    public function out_of_stock(Request $request){
        $type = DB::table('type_product')->orderBy('type_id', 'asc')->get();
        $product = DB::table('product')
            ->join('type_product', 'product.type_id', '=', 'type_product.type_id')
            ->select('product.*', 'type_product.*')
            ->where('product_status', 1)
            ->where('product_unit', '<=',0)
            ->orderBy('product_id', 'asc')
            ->get();

        return view('pages.product.out_of_stock', [
            'data_product' => $product,
            'type' => $type
        ]);
    }
}
