<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Support;
use Image;

class SupportController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    function addsupport()
    {
      $supports =  Support::orderBy('id', 'desc')->paginate(5);
    return view('support/view', compact('supports'));
    }

    function insertsupport(Request $request)
    {
      if ($request->hasFile('image')) {

            $image = $request->file('image');
            $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(base_path('public/support_image_folder/' . $filename ),80);

            Support::insert([
              'heading'=> $request->heading,
              'details'=> $request->details,
              'image'=> 'support_image_folder/'.$filename,
              'created_at'=> Carbon::now()
            ]);
            return back()->with('success', 'Service inserted successfully!');
          }
      else{
        Support::insert([
          'heading'=> $request->heading,
          'details'=> $request->details,
          'image'=> 'support_image_folder/'.$filename,
          'created_at'=> Carbon::now()
        ]);
        return back()->with('success', 'Service inserted successfully!');
      }

}
    function deletesupport($support_id)
    {
      Support::find($support_id)->delete();
      return back()->with('successdelete', 'Service successfully deleted');
    }

    function editsupport($support_id)
    {
      $support = Support::findOrFail($support_id);
      return view('support/edit', compact('support'));
    }

    function updatesupport(Request $request)
    {
      if ($request->hasFile('image')) {

        echo $request->support_id;

            $image = $request->file('image');
            $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save(base_path('public/support_image_folder/' . $filename ),80);
            Support::findOrFail($request->support_id)->update([
            'heading'=> $request->heading,
            'details'=> $request->details,
            'image'=> 'support_image_folder/'.$filename,
    ]);
    return back()->with('success', 'Support Updated Succesfully');
    }
    else {
      Support::findOrFail($request->support_id)->update([
      'heading'=> $request->heading,
      'details'=> $request->details,
    ]);
    return back()->with('success', 'Support Updated Succesfully');
    }
  }
}
