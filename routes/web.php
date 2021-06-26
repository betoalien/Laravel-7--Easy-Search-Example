<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\User;
use App\Customers;

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
    return view('principal');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::any('/search',function(){
    $q = Request::input ( 'q' );
    $Customers = Customers::where('name', 'LIKE', '%' . $q . '%')->orWhere('email', 'LIKE', '%' . $q . '%')->orWhere('phone', '=', $q)->orWhere('address', '=', $q)->orWhere('city', '=', $q)->orWhere('state', '=', $q)->orWhere('country', '=', $q)->get();
    if(count($Customers) > 0)
            return view('principal', ['Customers'=>$Customers])->withDetails($Customers)->withQuery( $q );
        else return view('principal', ['Customers'=>$Customers])->withMessage('No results found !');
});
