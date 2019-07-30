<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Whyus;
use App\Office;
use App\City;
use App\Link;
use App\Sociallink;
use App\Payment;
use Image;

class WhyusController extends Controller
{
  public function __construct()
      {
          $this->middleware('auth');
      }

  public function addwhyus()
      {
       $whyuses =  Whyus::all();
       //print_r($banners);
       return view('whyus/view', compact('whyuses'));
      }


  function insertwhyus(Request $request)
    {
        $pst = count(Whyus::all());
        if($pst==0){
           Whyus::insert([
                  'heading'  => $request->heading,
                  'p1'       => $request->p1,
                  'p2'       => $request->p2,
                  'p3'       => $request->p3,
                  'created_at' => Carbon::now()
             ]);

             return back()->with('success', 'Whyus Inserted Succesfully!');
           }

          else{
            Whyus::where('id',1)->update([
                   'heading'  => $request->heading,
                   'p1'       => $request->p1,
                   'p2'       => $request->p2,
                   'p3'       => $request->p3,
                   'created_at' => Carbon::now()
              ]);
              return back()->with('success', 'Whyus updated Succesfully!');
            }

      }


    function deletewhyus($whyus_id)
        {
          Whyus::where('id',$whyus_id)->delete();
          return back()->with('successdelete', 'whyus successfully deleted');
        }


    function editwhyus($whyus_id)
        {
          $whyus = Whyus::findOrFail($whyus_id);


          return view('whyus/edit', compact('whyus'));
        }

    function updatewhyus(Request $request)
        {
            Whyus::findOrFail($request->whyus_id)->update([
              'heading'  => $request->heading,
              'p1'       => $request->p1,
              'p2'       => $request->p2,
              'p3'       => $request->p3,
            ]);
            return back();
        }




        //Office
        public function addoffice()
            {
             $offices =  Office::all();
             //print_r($banners);
             return view('office/view', compact('offices'));
            }


        function insertoffice(Request $request)
          {
              $pst = count(Office::all());
              if($pst==0){
                 Office::insert([
                        'heading'  => $request->heading,
                        'title1'       => $request->title1,
                        'title2'       => $request->title2,
                        'title3'       => $request->title3,
                        'title4'       => $request->title4,
                        'title5'       => $request->title5,
                        'title6'       => $request->title6,
                        'title7'       => $request->title7,
                        'title8'       => $request->title8,
                        'title9'       => $request->title9,
                        'title10'       => $request->title10,
                        'title11'       => $request->title11,
                        'title12'       => $request->title12,
                        'title13'       => $request->title13,
                        'title14'       => $request->title14,
                        'title15'       => $request->title15,
                        'title16'       => $request->title16,
                        'title17'       => $request->title17,
                        'created_at' => Carbon::now()
                   ]);

                   return back()->with('success', 'Office Inserted Succesfully!');
                 }

                else{
                  Ofice::where('id',1)->update([
                    'heading'  => $request->heading,
                    'title1'       => $request->title1,
                    'title2'       => $request->title2,
                    'title3'       => $request->title3,
                    'title4'       => $request->title4,
                    'title5'       => $request->title5,
                    'title6'       => $request->title6,
                    'title7'       => $request->title7,
                    'title8'       => $request->title8,
                    'title9'       => $request->title9,
                    'title10'       => $request->title10,
                    'title11'       => $request->title11,
                    'title12'       => $request->title12,
                    'title13'       => $request->title13,
                    'title14'       => $request->title14,
                    'title15'       => $request->title15,
                    'title16'       => $request->title16,
                    'title17'       => $request->title17,
                    'created_at' => Carbon::now()
                    ]);
                    return back()->with('success', 'Office updated Succesfully!');
                  }

            }


          function deleteoffice($office_id)
              {
                Office::where('id',$office_id)->delete();
                return back()->with('successdelete', 'whyus successfully deleted');
              }


          function editoffice($office_id)
              {
                $office = Office::findOrFail($office_id);


                return view('office/edit', compact('office'));
              }

          function updateoffice(Request $request)
              {
                  Office::findOrFail($request->office_id)->update([
                    'heading'  => $request->heading,
                    'title1'       => $request->title1,
                    'title2'       => $request->title2,
                    'title3'       => $request->title3,
                    'title4'       => $request->title4,
                    'title5'       => $request->title5,
                    'title6'       => $request->title6,
                    'title7'       => $request->title7,
                    'title8'       => $request->title8,
                    'title9'       => $request->title9,
                    'title10'       => $request->title10,
                    'title11'       => $request->title11,
                    'title12'       => $request->title12,
                    'title13'       => $request->title13,
                    'title14'       => $request->title14,
                    'title15'       => $request->title15,
                    'title16'       => $request->title16,
                    'title17'       => $request->title17,
                  ]);
                  return back();
              }

              //city

              public function addcity()
                  {
                   $cities =  City::all();
                   //print_r($banners);
                   return view('city/view', compact('cities'));
                  }


              function insertcity(Request $request)
                {
                       City::insert([
                              'title'    => $request->title,
                              'link'       => $request->link,
                              'created_at' => Carbon::now()
                         ]);
                          return back()->with('success', 'City updated Succesfully!');
                }

              function deletecity($city_id)
                    {
                      City::where('id',$city_id)->delete();
                      return back()->with('successdelete', 'city successfully deleted');
                    }


                function editcity($city_id)
                    {
                      $city = City::findOrFail($city_id);


                      return view('city/edit', compact('city'));
                    }

                function updatecity(Request $request)
                    {
                        City::findOrFail($request->city_id)->update([
                          'title'  => $request->title,
                          'link'       => $request->link,
                        ]);
                        return back();
                    }



                    //Important Links

                    public function addlink()
                        {
                         $links =  Link::all();
                         return view('link/view', compact('links'));
                        }


                    function insertlink(Request $request)
                      {
                          $pst = count(Link::all());
                          if($pst==0){
                             Link::insert([

                                    'title1'       => $request->title1,
                                    'title2'       => $request->title2,
                                    'title3'       => $request->title3,
                                    'title4'       => $request->title4,
                                    'title5'       => $request->title5,
                                    'created_at'   => Carbon::now(),

                               ]);

                               return back()->with('success', 'Link Inserted Succesfully!');
                             }

                            else{
                              Link::where('id',1)->update([

                                'title1'       => $request->title1,
                                'title2'       => $request->title2,
                                'title3'       => $request->title3,
                                'title4'       => $request->title4,
                                'title5'       => $request->title5,
                                'created_at' => Carbon::now()
                                ]);
                                return back()->with('success', 'link updated Succesfully!');
                              }

                        }


                      function deletelink($link_id)
                          {
                            Link::where('id',$link_id)->delete();
                            return back()->with('successdelete', 'link successfully deleted');
                          }


                      function editlink($link_id)
                          {
                            $link = Link::findOrFail($link_id);


                            return view('link/edit', compact('link'));
                          }

                      function updatelink(Request $request)
                          {
                              Link::findOrFail($request->link_id)->update([

                                'title1'       => $request->title1,
                                'title2'       => $request->title2,
                                'title3'       => $request->title3,
                                'title4'       => $request->title4,
                                'title5'       => $request->title5,

                              ]);
                              return back();
                          }






                          //Social Link

                          public function addsociallink()
                              {
                               $sociallinks =  Sociallink::all();
                               return view('sociallink/view', compact('sociallinks'));
                              }


                          function insertsociallink(Request $request)
                            {
                                $pst = count(Sociallink::all());
                                if($pst==0){
                                   Sociallink::insert([

                                          'link1'       => $request->link1,
                                          'link2'       => $request->link2,
                                          'link3'       => $request->link3,
                                          'link4'       => $request->link4,


                                     ]);

                                     return back()->with('success', 'Social Link Inserted Succesfully!');
                                   }

                                  else{
                                    Sociallink::where('id',1)->update([

                                      'link1'       => $request->link1,
                                      'link2'       => $request->link2,
                                      'link3'       => $request->link3,
                                      'link4'       => $request->link4,
                                      'created_at' => Carbon::now()
                                      ]);
                                      return back()->with('success', 'Social link updated Succesfully!');
                                    }

                              }


                            function deletesociallink($sociallink_id)
                                {
                                  Sociallink::where('id',$sociallink_id)->delete();
                                  return back()->with('successdelete', 'Social link successfully deleted');
                                }


                            function editsociallink($sociallink_id)
                                {
                                  $sociallink = Sociallink::findOrFail($sociallink_id);


                                  return view('sociallink/edit', compact('sociallink'));
                                }

                            function updatesociallink(Request $request)
                                {
                                    Sociallink::findOrFail($request->sociallink_id)->update([

                                      'link1'       => $request->link1,
                                      'link2'       => $request->link2,
                                      'link3'       => $request->link3,
                                      'link4'       => $request->link4,

                                    ]);
                                    return back();
                                }



                                //Payment





                                public function addpayment()
                                    {
                                     $payments =  Payment::all();
                                     //print_r($banners);
                                     return view('payment/view', compact('payments'));
                                    }


                                function insertpayment(Request $request)
                                  {
                                    $payments =  Payment::all();
                                    $data = count($payments);
                                    if($data==0){
                                      if ($request->hasFile('image1')||$request->hasFile('image2')||$request->hasFile('image3')) {

                                        $image1 = $request->file('image1');
                                        $image2 = $request->file('image2');
                                        $image3 = $request->file('image3');
                                        $filename1   = str_random(30) . '.' . $image1->getClientOriginalExtension();
                                        $filename2   = str_random(30) . '.' . $image2->getClientOriginalExtension();
                                        $filename3   = str_random(30) . '.' . $image3->getClientOriginalExtension();
                                         Image::make($image1)->save(base_path('public/payment_image_folder/' . $filename1 ),80);
                                         Image::make($image2)->save(base_path('public/payment_image_folder/' . $filename2 ),80);
                                         Image::make($image3)->save(base_path('public/payment_image_folder/' . $filename3 ),80);
                                         Payment::insert([
                                            'text1'       => $request->text1,
                                            'text2'       => $request->text2,
                                            'text3'       => $request->text3,
                                            'link1'       => $request->link1,
                                            'link2'       => $request->link2,
                                            'title1'       => $request->title1,
                                            'title2'       => $request->title2,
                                            'image1' => 'payment_image_folder/'.$filename1,
                                            'image2' => 'payment_image_folder/'.$filename2,
                                            'image3' => 'payment_image_folder/'.$filename3,
                                            'created_at' => Carbon::now()
                                           ]);

                                           return back()->with('success', 'Payment Inserted Succesfully!');
                                         }
                                        else {
                                          Payment::insert([
                                            'text1'       => $request->text1,
                                            'text2'       => $request->text2,
                                            'text3'       => $request->text3,
                                            'link1'       => $request->link1,
                                            'link2'       => $request->link2,
                                            'title1'       => $request->title1,
                                            'title2'       => $request->title2,
                                             'created_at' => Carbon::now()
                                            ]);
                                          return back();
                                        }
                                      }
                                      else{
                                        if ($request->hasFile('image1')||$request->hasFile('image2')||$request->hasFile('image3')) {

                                          $image1 = $request->file('image1');
                                          $image2 = $request->file('image2');
                                          $image3 = $request->file('image3');
                                          $filename1   = str_random(30) . '.' . $image1->getClientOriginalExtension();
                                          $filename2   = str_random(30) . '.' . $image2->getClientOriginalExtension();
                                          $filename3   = str_random(30) . '.' . $image3->getClientOriginalExtension();
                                           Image::make($image1)->save(base_path('public/payment_image_folder/' . $filename1 ),80);
                                           Image::make($image2)->save(base_path('public/payment_image_folder/' . $filename2 ),80);
                                           Image::make($image3)->save(base_path('public/payment_image_folder/' . $filename3 ),80);
                                           Payment::where('id',1)->update([
                                              'text1'       => $request->text1,
                                              'text2'       => $request->text2,
                                              'text3'       => $request->text3,
                                              'link1'       => $request->link1,
                                              'link2'       => $request->link2,
                                              'title1'       => $request->title1,
                                              'title2'       => $request->title2,
                                              'image1' => 'payment_image_folder/'.$filename1,
                                              'image2' => 'payment_image_folder/'.$filename2,
                                              'image3' => 'payment_image_folder/'.$filename3,
                                              'created_at' => Carbon::now()
                                             ]);

                                             return back()->with('success', 'Payment Updated Succesfully!');
                                           }
                                          // else {
                                          //   Payment::where('id',1)->update([
                                          //     'text1'       => $request->text1,
                                          //     'text2'       => $request->text2,
                                          //     'text3'       => $request->text3,
                                          //     'link1'       => $request->link1,
                                          //     'link2'       => $request->link2,
                                          //     'title1'       => $request->title1,
                                          //     'title2'       => $request->title2,
                                          //     'image1' => 'payment_image_folder/'.$filename1,
                                          //     'image2' => 'payment_image_folder/'.$filename2,
                                          //     'image3' => 'payment_image_folder/'.$filename3,
                                          //     'created_at' => Carbon::now()
                                          //     ]);
                                          //   return back();
                                          // }
                                      }
                                    }


                                  function deletepayment($payment_id)
                                      {
                                        Payment::where('id',$payment_id)->delete();
                                        return back()->with('successdelete', 'Payment successfully deleted');
                                      }


                                  function editpayment($payment_id)
                                      {
                                        $payment = Payment::findOrFail($payment_id);


                                        return view('payment/edit', compact('payment'));
                                      }

                                  function updatepayment(Request $request)
                                      {
                                        if ($request->hasFile('image1')||$request->hasFile('image2')||$request->hasFile('image3')) {

                                          $image1 = $request->file('image1');
                                          $image2 = $request->file('image2');
                                          $image3 = $request->file('image3');
                                          $filename1   = str_random(30) . '.' . $image1->getClientOriginalExtension();
                                          $filename2   = str_random(30) . '.' . $image2->getClientOriginalExtension();
                                          $filename3   = str_random(30) . '.' . $image3->getClientOriginalExtension();
                                           Image::make($image1)->save(base_path('public/payment_image_folder/' . $filename1 ),80);
                                           Image::make($image2)->save(base_path('public/payment_image_folder/' . $filename2 ),80);
                                           Image::make($image3)->save(base_path('public/payment_image_folder/' . $filename3 ),80);
                                          Payment::findOrFail($request->payment_id)->update([
                                            'text1'       => $request->text1,
                                            'text2'       => $request->text2,
                                            'text3'       => $request->text3,
                                            'link1'       => $request->link1,
                                            'link2'       => $request->link2,
                                            'title1'       => $request->title1,
                                            'title2'       => $request->title2,
                                            'image1' => 'payment_image_folder/'.$filename,
                                            'image2' => 'payment_image_folder/'.$filename,
                                            'image3' => 'payment_image_folder/'.$filename,
                                          ]);
                                          return back()->with('success', 'payment updated successfully');
                                      }
                                      Payment::findOrFail($request->payment_id)->update([
                                        'text1'       => $request->text1,
                                        'text2'       => $request->text2,
                                        'text3'       => $request->text3,
                                        'link1'       => $request->link1,
                                        'link2'       => $request->link2,
                                        'title1'       => $request->title1,
                                        'title2'       => $request->title2,
                                      ]);
                                      return back()->with('success', 'payment updated successfully');
                                }
                              }
