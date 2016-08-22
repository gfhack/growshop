<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductsController extends Controller {
  public function index() {
    $ps = DB::table('products')->get();

    return view('products.index', compact('ps'));
  }

  public function create() {
    return view('products.create');
  }

  public function destroy($id) {
    Product::find($id)->delete();

    return redirect()->action('ProductsController@report');
  }

  public function report() {
    $ps = DB::table('products')->get();

    return view('products.report', compact('ps'));
  }

  public function store(Request $req) {
    $p = new Product();
    $p->name = $req->name;
    $p->price = $req->price;
    $p->image = 'todo';
    //TODO image
    $p->save();
    return back();
  }
}
