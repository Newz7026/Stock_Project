<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
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
}
