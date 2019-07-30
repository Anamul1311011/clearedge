<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use carbon\Carbon;
use Image;

class ServiceController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
    function addservice()
    {
      $services =  Service::orderBy('id', 'desc')->paginate(5);
    return view('service/view', compact('services'));
    }

    function insertservice(Request $request)
    {
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/service_image_folder/' . $filename ),80);

    Service::insert([
      'title'=> $request->title,
      'link1'=> $request->link1,
      'link2'=> $request->link2,
      'link3'=> $request->link3,
      'link4'=> $request->link4,
      'link5'=> $request->link5,
      'image'=> 'service_image_folder/'.$filename,
      'created_at'=> Carbon::now()
    ]);
    return back()->with('success', 'Service inserted successfully!');
    }
}
    function deleteservice($service_id)
    {
      Service::find($service_id)->delete();
      return back()->with('successdelete', 'Service successfully deleted');
    }

    function editservice($service_id)
    {
      $service = Service::findOrFail($service_id);
      return view('service/edit', compact('service'));
    }

    function updateservice(Request $request)
    {
      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = str_random(30) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->save(base_path('public/service_image_folder/' . $filename ),80);
        Service::findOrFail($request->service_id)->update([
            'title'=> $request->title,
            'link1' => $request->link1,
            'link2'=> $request->link2,
            'link3'=> $request->link3,
            'link4'=> $request->link4,
            'link5'=> $request->link5,
            'image'=> 'service_image_folder/'.$filename,
    ]);
    return back()->with('success', 'Service Updated Succesfully' );
    }
    else {
      Service::findOrFail($request->service_id)->update([
          'title'=> $request->title,
          'link1' => $request->link1,
          'link2'=> $request->link2,
          'link3'=> $request->link3,
          'link4'=> $request->link4,
          'link5'=> $request->link5,
        ]);
        return back()->with('success', 'Service Updated Succesfully' );
    }
  }
}
