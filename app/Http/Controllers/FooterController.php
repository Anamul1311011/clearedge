<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Footer;
use Image;

class FooterController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
      }

  public function addfooter()
      {
       $footers =  Footer::all();
       //print_r($banners);
       return view('footer/view', compact('footers'));
      }


  function insertfooter(Request $request)
    {
      $footers =  Footer::all();
      $data = count($footers);
      if($data==0){
        if ($request->hasFile('footer_image')) {

          $footer_image = $request->file('footer_image');
          $filename   = str_random(30) . '.' . $footer_image->getClientOriginalExtension();
           Image::make($footer_image)->save(base_path('public/footer_image_folder/' . $filename ),80);
           Footer::insert([
              'text1'       => $request->text1,
              'text2'       => $request->text2,
              'footer_image' => 'footer_image_folder/'.$filename,
              'created_at' => Carbon::now()
             ]);

             return back()->with('success', 'Logo Inserted Succesfully!');
           }
          else {
            Footer::insert([
              'text1'       => $request->text1,
              'text2'       => $request->text2,
               'created_at' => Carbon::now()
              ]);
            return back();
          }
        }
        else{
          if ($request->hasFile('footer_image')) {
              $footer_image = $request->file('footer_image');
              $filename   = str_random(30) . '.' . $footer_image->getClientOriginalExtension();
               Image::make($footer_image)->save(base_path('public/footer_image_folder/' . $filename ),80);
               Footer::where('id',1)->update([
                 'text1'       => $request->text1,
                 'text2'       => $request->text2,
                 'footer_image' => 'footer_image_folder/'.$filename,
                 'created_at' => Carbon::now()
                 ]);

                 return back()->with('success', 'Logo Inserted Succesfully!');
             }
            else {
              Footer::where('id',1)->update([
                'text1'       => $request->text1,
                'text2'       => $request->text2,
                'footer_image' => 'footer_image_folder/'.$filename,
                'created_at' => Carbon::now()
                ]);
              return back();
            }
        }
      }


    function deletefooter($footer_id)
        {
          Footer::where('id',$footer_id)->delete();
          return back()->with('successdelete', 'Logo successfully deleted');
        }


    function editfooter($footer_id)
        {
          $footer = Footer::findOrFail($footer_id);


          return view('footer/edit', compact('footer'));
        }

    function updatefooter(Request $request)
        {
          if ($request->hasFile('footer_image')) {

            $footer_image = $request->file('footer_image');
            $filename   = str_random(30) . '.' . $footer_image->getClientOriginalExtension();
             Image::make($footer_image)->save(base_path('public/footer_image_folder/' . $filename ),80);
            Footer::findOrFail($request->footer_id)->update([
              'text1'       => $request->text1,
              'text2'       => $request->text2,
              'footer_image' => 'footer_image_folder/'.$filename,
            ]);
            return back()->with('success', 'payment updated successfully');
        }

        Footer::findOrFail($request->footer_id)->update([
          'text1'       => $request->text1,
          'text2'       => $request->text2,
        ]);
      return back()->with('success', 'payment updated successfully');

      }
}
