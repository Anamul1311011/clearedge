<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'FrontendController@index');
Route::get('/add/product', 'ProductController@addproduct');
Route::post('/insert/product', 'ProductController@insertproduct');
Route::get('/delete/product/{product_id}', 'ProductController@deleteproduct');
Route::get('/edit/product/{product_id}', 'ProductController@editproduct');
Route::post('/update/product', 'ProductController@productupdate');


Route::get('/add/moreproduct', 'MoreproductController@addmoreproduct');
Route::post('/insert/moreproduct', 'MoreproductController@insertmoreproduct');
Route::get('/delete/moreproduct/{moreproduct_id}', 'MoreproductController@deletemoreproduct');
Route::get('/edit/moreproduct/{moreproduct_id}', 'MoreproductController@editmoreproduct');
Route::post('/update/moreproduct', 'MoreproductController@moreproductupdate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/banner', 'HomeController@addbanner');
Route::post('/insert/banner', 'HomeController@insertbanner');
Route::get('/delete/banner/{banner_id}', 'HomeController@deletebanner');
Route::get('/edit/banner/{banner_id}', 'HomeController@editbanner');
Route::post('/update/banner', 'HomeController@updatebanner');

Route::get('/add/logo', 'HomeController@addlogo');
Route::post('/insert/logo', 'HomeController@insertlogo');
Route::get('/delete/logo/{logo_id}', 'HomeController@deletelogo');
Route::get('/edit/logo/{logo_id}', 'HomeController@editlogo');
Route::post('/update/logo', 'HomeController@updatelogo');


Route::get('/add/menu', 'HomeController@addmenu');
Route::post('/insert/menu', 'HomeController@insertmenu');
Route::get('/delete/menu/{logo_id}', 'HomeController@deletemenu');
Route::get('/edit/menu/{logo_id}', 'HomeController@editmenu');
Route::post('/update/menu', 'HomeController@updatemenu');

Route::get('/add/submenu', 'HomeController@addsubmenu');

Route::get('/add/page', 'HomeController@addpage');
Route::post('/insert/page', 'HomeController@insertpage');
Route::get('/delete/page/{page_id}', 'HomeController@deletepage');
Route::get('/edit/page/{page_id}', 'HomeController@editpage');
Route::post('/update/page', 'HomeController@updatepage');


Route::get('/add/submenu', 'HomeController@addsubmenu');
Route::post('/insert/submenu', 'HomeController@insertsubmenu');
Route::get('/delete/submenu/{submenu_id}', 'HomeController@deletesubmenu');
Route::get('/edit/submenu/{submenu_id}', 'HomeController@editsubmenu');
Route::post('/update/submenu', 'HomeController@updatesubmenu');


Route::get('/add/service', 'ServiceController@addservice');
Route::post('/insert/service', 'ServiceController@insertservice');
Route::get('/delete/service/{service_id}', 'ServiceController@deleteservice');
Route::get('/edit/service/{service_id}', 'ServiceController@editservice');
Route::post('/update/service', 'ServiceController@updateservice');

Route::get('/add/support', 'SupportController@addsupport');
Route::post('/insert/support', 'SupportController@insertsupport');
Route::get('/delete/support/{support_id}', 'SupportController@deletesupport');
Route::get('/edit/support/{support_id}', 'SupportController@editsupport');
Route::post('/update/support', 'SupportController@updatesupport');

Route::get('/add/footer', 'FooterController@addfooter');
Route::post('/insert/footer', 'FooterController@insertfooter');
Route::get('/delete/footer/{footer_id}', 'FooterController@deletefooter');
Route::get('/edit/footer/{footer_id}', 'FooterController@editfooter');
Route::post('/update/footer', 'FooterController@updatefooter');

Route::get('/add/whyus', 'WhyusController@addwhyus');
Route::post('/insert/whyus', 'WhyusController@insertwhyus');
Route::get('/delete/whyus/{whyus_id}', 'WhyusController@deletewhyus');
Route::get('/edit/whyus/{whyus_id}', 'WhyusController@editwhyus');
Route::post('/update/whyus', 'WhyusController@updatewhyus');


Route::get('/add/office', 'WhyusController@addoffice');
Route::post('/insert/office', 'WhyusController@insertoffice');
Route::get('/delete/office/{office_id}', 'WhyusController@deleteoffice');
Route::get('/edit/office/{office_id}', 'WhyusController@editoffice');
Route::post('/update/office', 'WhyusController@updateoffice');

Route::get('/add/city', 'WhyusController@addcity');
Route::post('/insert/city', 'WhyusController@insertcity');
Route::get('/delete/city/{city_id}', 'WhyusController@deletecity');
Route::get('/edit/city/{city_id}', 'WhyusController@editcity');
Route::post('/update/city', 'WhyusController@updatecity');

Route::get('/add/link', 'WhyusController@addlink');
Route::post('/insert/link', 'WhyusController@insertlink');
Route::get('/delete/link/{link_id}', 'WhyusController@deletelink');
Route::get('/edit/link/{link_id}', 'WhyusController@editlink');
Route::post('/update/link', 'WhyusController@updatelink');

Route::get('/add/sociallink', 'WhyusController@addsociallink');
Route::post('/insert/sociallink', 'WhyusController@insertsociallink');
Route::get('/delete/sociallink/{sociallink_id}', 'WhyusController@deletesociallink');
Route::get('/edit/sociallink/{sociallink_id}', 'WhyusController@editsociallink');
Route::post('/update/sociallink', 'WhyusController@updatesociallink');

Route::get('/add/payment', 'WhyusController@addpayment');
Route::post('/insert/payment', 'WhyusController@insertpayment');
Route::get('/delete/payment/{payment_id}', 'WhyusController@deletepayment');
Route::get('/edit/payment/{payment_id}', 'WhyusController@editpayment');
Route::post('/update/payment', 'WhyusController@updatepayment');
Route::get('/page/{id}', 'FrontendController@pagedetail');
