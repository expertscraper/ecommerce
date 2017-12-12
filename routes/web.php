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

Route::get('/', 'HomeController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/new', 'HomeController@new')->name('home');
// Route::get('/invoice', 'InvoiceController@index')->name('invoice');
// Route::post('login','InvoiceController@login');


Auth::routes();

//Route::get('/invoice', 'HomeController@index')->name('home');

Route::group(['prefix' => 'shops'], function(){
	Route::get('',
		['as' => 'shops.index',function(){
			return view('admin.index');
	}]);
	Route::get('/customer',['as' => 'shops.customer','uses' => 'CustomerController@index']);
	Route::get('/customer/create',
		['as' => 'shops.customer.new',function(){
			return view('customer.create');
	}]);
	Route::get('/customer/{id}',['as' => 'shops.customer.edit','uses' => 'CustomerController@edit']);
	Route::get('/customer/{code}/check',['as' => 'shops.customer.check','uses' => 'CustomerController@check']);
	// Route::post('/customer/search',['as' => 'shops.customer.search','uses' => 'CustomerController@search']);
	Route::post('/customer',['as' => 'shops.customer','uses' => 'CustomerController@search']);
	Route::post ('/customer/save',['as' => 'shops.customer.save','uses'=>'CustomerController@save']);

	Route::get('/estimates',['as' => 'shops.estimates','uses' => 'EstimateController@index']);
	Route::get('/estimates/new',
		['as' => 'shops.estimates.new',function(){
			return view('invoice.estimate_new');
	}]);
	Route::get('/invoices',['as' => 'shops.invoices','uses' => 'InvoiceController@index']);
	Route::get('/invoices/new',['as' => 'shops.invoices.new','uses' => 'InvoiceController@create']);
	Route::get('/invoices/{id}/show',['as' => 'shops.invoices.show','uses' => 'InvoiceController@show']);


	Route::get('/items',['as' => 'shops.items','uses' => 'ItemController@index']);
	Route::get('/items/new',['as' => 'shops.items.new','uses' => 'ItemController@create']);
	Route::post('/items/save',['as' => 'shops.items.save','uses' => 'ItemController@store']);

	Route::get('/category',['as' => 'shops.category','uses' => 'ShopController@index']);
	Route::get('/category/new',['as' => 'shops.category.new','uses' => 'ShopController@create']);
	// Route::get('/clients',['as' => 'invoice.clients','uses' => 'AdminController@getAllClient']);
	// Route::get('/addclient',
	// 	['as' => 'invoice.addclient',function(){
	// 		return view('admin.addclient');
	// }]);
		

	// Route::get('create',
	// 	['as' => 'product.create', function(){
	// 		return View::make('product.create');
	// }]);
});






// Route::get('/invoice/estimate','AdminController@estimate')->name('estimate');
// Route::get('/invoice/addEstimate','AdminController@addEstimate')->name('addEstimate');
// Route::get('/invoice/payment','AdminController@payment')->name('payment');
// Route::get('/invoice/addPayment','AdminController@addPayment')->name('addPayment');
// Route::get('/invoice/product','AdminController@product')->name('product');
// Route::get('/invoice/addProduct','AdminController@addProduct')->name('addProduct');
// Route::get('/invoice/report','AdminController@report')->name('report');
// Route::get('/invoice/addReport','AdminController@addReport')->name('addReport');
// Route::get('/invoice/user','AdminController@user')->name('user');
// Route::get('/invoice/adduser','AdminController@adduser')->name('adduser');
// Route::get('/invoice/setting','AdminController@setting')->name('setting');

// Route::get('/invoice/{id}/edit','AdminController@editClient')->name('editClient');
// Route::put('/invoice/{id}/edit','AdminController@updateClient')->name('updateclient');

// Route::get('/invoice/invoice','InvoiceController@index')->name('invoices');
// Route::get('/invoice/addinvoice','InvoiceController@create')->name('addinvoice');
// Route::get('/invoice/{id}','InvoiceController@show')->name('view');


// Route::post('/invoice/create','InvoiceController@store')->name('create');
// Route::post('/invoice/addclient','AdminController@createClient')->name('createclient');
//Route::resource('invoice','InvoiceController');















