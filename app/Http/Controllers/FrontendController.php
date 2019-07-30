<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Banner;
use App\Logo;
use App\Menu;
use App\Submenu;
use App\Page;
use App\Moreproduct;
use App\Service;
use App\Support;
use App\Footer;
use App\Whyus;
use App\Office;
use App\City;
use App\Link;
use App\Sociallink;
use App\Payment;

class FrontendController extends Controller
{
    function index()
    {
      $products = Product::orderBy('updated_at','desc')->limit(3)->get();
      $banners =  Banner::all();
      $logos =  Logo::all();
      $menus =  Menu::all();
      $submenus =  Submenu::all();
      $pages =  Page::all();
      $mproducts =  Moreproduct::all();
      $services =  Service::all();
      $supports =  Support::all();
      $footers =  Footer::all();
      $whyuses =  Whyus::all();
      $offices =  Office::all();
      $cities =  City::all();
      $links =  Link::all();
      $sociallinks =  Sociallink::all();
      $payments =  Payment::all();
      return view('index', compact('products','banners', 'logos', 'menus', 'submenus', 'pages', 'mproducts', 'services', 'supports', 'footers','whyuses', 'offices','cities', 'links', 'sociallinks', 'payments'));
    }

    function pagedetail($id){
      $products = Product::orderBy('updated_at','desc')->limit(3)->get();
      $banners =  Banner::all();
      $logos =  Logo::all();
      $menus =  Menu::all();
      $submenus =  Submenu::all();
      $pages =  Page::all();
      $mproducts =  Moreproduct::all();
      $services =  Service::all();
      $supports =  Support::all();
      $footers =  Footer::all();
      $whyuses =  Whyus::all();
      $offices =  Office::all();
      $cities =  City::all();
      $links =  Link::all();
      $sociallinks =  Sociallink::all();
      $payments =  Payment::all();
      $page_data = Page::where('id',$id)->get();
      return view('page/page_detail', compact('page_data','products','banners', 'logos', 'menus', 'submenus', 'pages', 'mproducts', 'services', 'supports', 'footers','whyuses', 'offices','cities', 'links', 'sociallinks', 'payments'));

    }
}
