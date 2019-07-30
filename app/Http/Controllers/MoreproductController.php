<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Moreproduct;
use Carbon\Carbon;
use Image;

class MoreproductController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    function addmoreproduct()
    {
      $mproducts =  Moreproduct::orderBy('id', 'desc')->paginate(5);
    return view('moreproduct/view', compact('mproducts'));
    }

    function insertmoreproduct(Request $request)
    {
      if ($request->hasFile('mproduct_image')) {

        $mproduct_image = $request->file('mproduct_image');
        $filename = str_random(30) . '.' . $mproduct_image->getClientOriginalExtension();
        Image::make($mproduct_image)->resize(150, 150)->save(base_path('public/moreproduct_image_folder/' . $filename ),80);
           Moreproduct::insert([
          'heading'=> $request->heading,
          'title'=> $request->title,
          'detail'=> $request->detail,
          'mproduct_image'=> 'moreproduct_image_folder/'.$filename,
          'created_at'=> Carbon::now()
    ]);
    return back()->with('success', 'Product inserted successfully!');
    }
}
    function deletemoreproduct($moreproduct_id)
    {
      Moreproduct::find($moreproduct_id)->delete();
      return back()->with('successdelete', 'Product successfully deleted');
    }

    function editmoreproduct($moreproduct_id)
    {
      $p_id = $moreproduct_id;
      $mproduct = Moreproduct::findOrFail($moreproduct_id);
      return view('moreproduct/edit', compact('mproduct','p_id'));
    }

    function moreproductupdate(Request $request)
    {
      if ($request->hasFile('mproduct_image'))
        {
          $mproduct_image = $request->file('mproduct_image');
          $filename = str_random(10) . '.' . $mproduct_image->getClientOriginalExtension();
          echo $request->p_id;
          Image::make($mproduct_image)->resize(150, 150)->save(base_path('public/moreproduct_image_folder/' . $filename ),80);
          Moreproduct::where('id',$request->p_id)->update([
              'heading' => $request->heading,
              'title' => $request->title,
              'detail'=> $request->detail,
              'mproduct_image'=> 'moreproduct_image_folder/'.$filename,
          ]);
          return back()->with('success', 'More Product Updated Succesfully');
        }
      else {
              Moreproduct::findOrFail($request->p_id)->update([
                'heading' => $request->heading,
                'title' => $request->title,
                'detail'=> $request->detail,
              ]);
              return back()->with('success', 'More Product Updated Succesfully');
            }
    }
}
