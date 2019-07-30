<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Logo;
use App\Menu;
use App\Page;
use App\Submenu;
use Carbon\Carbon;
use Image;

class HomeController extends Controller
{

     function __construct()
        {
            $this->middleware('auth');
        }



     function addlogo()
        {
         $logos =  Logo::all();
         return view('logo/view', compact('logos'));
        }


    function insertlogo(Request $request)
      {
        $request->validate([
          'tel1' => 'required|numeric',
          'tel2' => 'required|numeric',
        ]);
        $logos =  Logo::all();
        $data = count($logos);
        if($data==0){
          if ($request->hasFile('logo_image')) {

            $logo_image = $request->file('logo_image');
            $filename   = str_random(30) . '.' . $logo_image->getClientOriginalExtension();

             Image::make($logo_image)->save(base_path('public/logo_image_folder/' . $filename ),80);
             Logo::insert([
                'para'       => $request->para,
                'tel1'       => $request->tel1,
                'tel2'       => $request->tel2,
                'logo_image' => 'logo_image_folder/'.$filename,
                'created_at' => Carbon::now()
               ]);

               return back()->with('success', 'Logo Inserted Succesfully!');
             }
            else {
              Logo::insert([
                 'para'       => $request->para,
                 'tel1'       => $request->tel1,
                 'tel2'       => $request->tel2,
                 'created_at' => Carbon::now()
                ]);
              return back();
            }
          }
          else{
            if ($request->hasFile('logo_image')) {
                $logo_image = $request->file('logo_image');
                $filename   = str_random(30) . '.' .$logo_image->getClientOriginalExtension();
                 Image::make($logo_image)->save(base_path('public/logo_image_folder/' . $filename ),80);

                 Logo::where('id',1)->update([
                    'para'       => $request->para,
                    'tel1'       => $request->tel1,
                    'tel2'       => $request->tel2,
                    'logo_image' => 'logo_image_folder/'.$filename,
                    'created_at' => Carbon::now()
                   ]);

                   return back()->with('success', 'Logo Inserted dsdsdsadass!');
               }
              else {
                Logo::where('id',1)->update([
                   'para'       => $request->para,
                   'tel1'       => $request->tel1,
                   'tel2'       => $request->tel2,
                   'created_at' => Carbon::now()
                  ]);
                return back();
              }
          }
        }


      function deletelogo($logo_id)
          {
            Logo::where('id',$logo_id)->delete();
            return back()->with('successdelete', 'Logo successfully deleted');
          }


      function editlogo($logo_id)
          {
            $logo = Logo::findOrFail($logo_id);
            return view('logo/edit', compact('logo'));
          }

      function updatelogo(Request $request)
          {
            if ($request->hasFile('logo_image')) {
                $logo_image = $request->file('logo_image');
                $filename   = str_random(30) . '.' .$logo_image->getClientOriginalExtension();
                 Image::make($logo_image)->save(base_path('public/logo_image_folder/' . $filename ),80);
              Logo::findOrFail($request->logo_id)->update([
                'para' => $request->para,
                'tel1' => $request->tel1,
                'tel2' => $request->tel2,
                'logo_image'=> 'logo_image_folder/'.$filename,
              ]);
              return back()->with('success', 'Logo Updated Succesfully' );
          }
          Logo::findOrFail($request->logo_id)->update([
            'para' => $request->para,
            'tel1' => $request->tel1,
            'tel2' => $request->tel2,
          ]);
          return back()->with('success', 'Logo Updated Succesfully' );
}

     function index()
    {
        return view('home');
    }






     function addbanner()
      {
        $banners =  Banner::all();
        return view('banner/view', compact('banners'));
      }


    function insertbanner(Request $request)
      {
        if ($request->hasFile('banner_image')) {

          $banner_image = $request->file('banner_image');
          $filename = str_random(30) . '.' . $banner_image->getClientOriginalExtension();
          Image::make($banner_image)->resize(1920, 600)->save(base_path('public/banner_image_folder/' . $filename ),80);
          //###Interventionway

           Banner::insert([
          'heading' => $request->heading,
          'sub_heading' => $request->sub_heading,
          'details' => $request->details,
          'banner_image' => 'banner_image_folder/'.$filename,
          'created_at' => Carbon::now()
         ]);

          return back()->with('success', 'Banner Inserted Succesfully!');
        }
        else {
             return back();
             }
        }


    function deletebanner($banner_id)
      {
        Banner::find($banner_id)->delete();
        return back()->with('successdelete', 'Banner successfully deleted');
     }


    function editbanner($banner_id)
       {
          $banner = Banner::findOrFail($banner_id);
          return view('banner/edit', compact('banner'));
       }


  function updatebanner(Request $request)
    {
      if ($request->hasFile('banner_image')) {
        $banner_image = $request->file('banner_image');
        $filename = str_random(10) . '.' . $banner_image->getClientOriginalExtension();
        Image::make($banner_image)->resize(1920, 600)->save(base_path('public/banner_image_folder/' . $filename ),80);
        Banner::findOrFail($request->banner_id)->update([
            'heading'=> $request->heading,
            'sub_heading' => $request->sub_heading,
            'details'=> $request->details,
            'banner_image'=> 'banner_image_folder/'.$filename,
          ]);
          return back()->with( 'success', 'Banner Updated successfully');
    }
    else {
            Banner::findOrFail($request->banner_id)->update([
            'heading'=> $request->heading,
            'sub_heading' => $request->sub_heading,
            'details'=> $request->details,

          ]);
          return back()->with( 'success', 'Banner Updated successfully');
    }
  }
        /////////MENU////////////////
  function addmenu()
   {
     $menus =  Menu::all();
     return view('menu/view', compact('menus'));
   }

    function insertmenu(Request $request)
      {

           $s_id = Menu::insertGetId([
          'title' => $request->title,
          'link1' => $request->link1,
          'link2' => $request->link2,
          'link3' => $request->link3,
          'created_at' => Carbon::now()
         ]);
         for($i=1; $i<=3; $i++)
      {
       $s="link".$i;
        if(!empty($request->$s)){
          Page::insert([
            'menu_id' =>$s_id,
            'page_title'=>$request->$s,
            'created_at' => Carbon::now()
          ]);
       }
      }
          return back()->with('success', 'Menu Inserted Succesfully!');
            }


    function deletemenu($menu_id)
      {
        Menu::find($menu_id)->delete();
        return back()->with('successdelete', 'Menu successfully deleted');
     }


    function editmenu($menu_id)
       {
          $menu = Menu::findOrFail($menu_id);
          return view('menu/edit', compact('menu'));
       }


  function updatemenu(Request $request)
    {
      Menu::findOrFail($request->menu_id)->update([
            'title'=> $request->title,
            'link1' => $request->link1,
            'link2'=> $request->link2,
            'link3'=> $request->link3,
          ]);
          return back();
        }



        //////////page/////////////
        function addpage()
        {
          $pages =  Page::all();
          return view('page/view', compact('pages'));
        }

        function insertpage(Request $request)
          {

            if ($request->hasFile('featured_image')) {
                  $featured_image = $request->file('featured_image');
                  $filename = str_random(30) . '.' . $featured_image->getClientOriginalExtension();
                  Image::make($featured_image)->resize(1920, 600)->save(base_path('public/page_image_folder/' . $filename ),80);
                  //###Interventionway

                   Page::insert([
                  'title'           => $request->title,
                  'page_content'    => $request->page_content,
                  'featured_image'  => 'page_image_folder/'.$filename,
                  'created_at'      => Carbon::now()
                 ]);

                  return back()->with('success', 'Page Inserted Succesfully!');
            }
            else {
                 return back();
                 }
            }

            function deletepage($page_id)
              {
                Page::find($page_id)->delete();
                return back()->with('successdelete', 'Page successfully deleted');
             }


            function editpage($page_id)
               {
                  $page = Page::findOrFail($page_id);
                  return view('page/edit', compact('page'));
               }


          function updatepage(Request $request)
          {
            if ($request->hasFile('featured_image')) {
              $featured_image = $request->file('featured_image');
              $filename = str_random(10) . '.' . $featured_image->getClientOriginalExtension();
              Image::make($featured_image)->resize(1920, 600)->save(base_path('public/page_image_folder/' . $filename ),80);
              Page::where('id',$request->page_id)->update([
                  'title'=> $request->title,
                  'page_content' => $request->page_content,
                  'featured_image'=> 'page_image_folder/'.$filename,
                ]);
                return back()->with( 'success', 'Page Updated successfully');
          }
          else {
                  Page::findOrFail($request->page_id)->update([
                  'title'=> $request->title,
                  'page_content' => $request->page_content,

                ]);
                return back()->with( 'success', 'Page Updated successfully');
          }
        }


        /////////SUBMENU//////////////


        public function addsubmenu()
            {
             $submenus =  Submenu::all();
             $menu_item = Menu::all();
             $pages = Page::all();
             return view('submenu/view', compact('submenus','menu_item','pages'));
            }


        function insertsubmenu(Request $request)
          {
                 Submenu::insert([
                        'mitem_id'    => $request->mitem_id,
                        'page_id'       => $request->page_id,
                        'created_at' => Carbon::now()
                   ]);
                    return back()->with('success', 'Submenu inserted Succesfully!');
          }

        function deletesubmenu($submenu_id)
              {
                Submenu::where('id',$submenu_id)->delete();
                return back()->with('successdelete', 'Submenu successfully deleted');
              }


          function editsubmenu($submenu_id)
              {
                $submenu = Submenu::findOrFail($submenu_id);
                return view('submenu/edit', compact('submenu'));
              }

          function updatesubmenu(Request $request)
              {
                  Submenu::findOrFail($request->submenu_id)->update([
                    'mitem_id'  => $request->mitem_id,
                    'page_id'       => $request->page_id,
                  ]);
                  return back()->with('success', 'Submenu updated Succesfully!');
              }

      }
