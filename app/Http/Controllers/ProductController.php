<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;
use Image;

class ProductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    function addproduct()
    {
      $products =  Product::orderBy('id', 'desc')->paginate(5);
    return view('product/view', compact('products'));
    }

    function insertproduct(Request $request)
    {
      if ($request->hasFile('product_image')) {
        // $new_file_location = $request->file('product_image')->store('product_image_folder');//filestorage system
        //Interventionway
        $product_image = $request->file('product_image');
        $filename = str_random(30) . '.' . $product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(1920, 600)->save(base_path('public/product_image_folder/' . $filename ),80);
        //###Interventionway

    Product::insert([
      'product_name'=> $request->product_name,
      'product_title'=> $request->product_title,
      'product_ID'=> $request->product_ID,
      'product_detail'=> $request->product_detail,
      'product_image'=> 'product_image_folder/'.$filename,
      'created_at'=> Carbon::now()
    ]);
    return back()->with('success', 'Product inserted successfully!');
    }
}
    function deleteproduct($product_id)
    {
      Product::find($product_id)->delete();
      return back()->with('successdelete', 'Product successfully deleted');
    }

    function editproduct($product_id)
    {
      $product = Product::findOrFail($product_id);
      return view('product/edit', compact('product'));
    }

    function productupdate(Request $request)
    {
      if ($request->hasFile('product_image')) {
        $product_image = $request->file('product_image');
        $filename = str_random(30) . '.' . $product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(1920, 600)->save(base_path('public/product_image_folder/' . $filename ),80);
        Product::findOrFail($request->product_id)->update([
        'product_name'=> $request->product_name,
        'product_title' => $request->product_title,
        'product_ID'=> $request->product_ID,
        'product_detail'=> $request->product_detail,
        'product_image'=> 'product_image_folder/'.$filename,
    ]);
    return back()->with('success', 'Product Updated Successfully');
    }
    else {
        Product::findOrFail($request->product_id)->update([
        'product_name'=> $request->product_name,
        'product_title' => $request->product_title,
        'product_ID'=> $request->product_ID,
        'product_detail'=> $request->product_detail,
    ]);
    return back()->with('success', 'Product Updated Successfully');
      }

    }
  }
