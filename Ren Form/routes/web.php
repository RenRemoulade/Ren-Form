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

Route::get('/', function () {
    return view('welcome');
});

Route::get('customer/{id}', function($id){
  $customer = App\Customer::find($id);
  foreach($customer->orders as $order){
    echo $order->name . '<br>';
  }
  echo $customer;
});

Route::get('customer_name/{name}', 'CustomerController@customer');

Route::get('orders', function(){
  $orders = App\Order::all();
  foreach($orders as $order){
    echo $order->customer->name . " bought " . $order->name . "<br>";
  }
});

Route::get('mypage', function(){
  $data = array('var1' => 'hey'
  , 'var2' => 'hotdog'
  , 'var3' => 'moar'
  , 'orders' => App\Order::all());
  return view('mypage', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
