<?php
use Illuminate\Support\Facades\Input;
Auth::routes();

        Route::get('/catalog', 'CatalogController@getIndex');
        Route::get('/catalog/show/{id}', 'CatalogController@getShow');
Route::get('/contacto', function (){
    return view('contacto');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', 'AdminController@index');
});


	Route::get('/', 'HomeController@index');
    Route::get('/catalog/create', 'CatalogController@getCreate');
    Route::get('/catalog/edit/{id}', 'CatalogController@getEdit');

    Route::post('/catalog/create', 'CatalogController@postCreate');
    Route::put('/catalog/edit/{id}', 'CatalogController@putEdit');

    Route::get('/user', 'UserController@getIndex');
    Route::get('/user/show/{id}', 'UserController@getShow');
    Route::get('/user/create', 'UserController@getCreate');
    Route::get('/user/edit/{id}', 'UserController@getEdit');
	

    Route::post('/user/create', 'UserController@postCreate');
    Route::put('/user/edit/{id}', 'UserController@putEdit');

    Route::get('searchForm/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect('home');
    
    $search = urlencode(e(Input::get('search')));
    $route = "searchForm/search/$search";
    return redirect($route);
    });
    Route::get("searchForm/search/{search}", "HomeController@search");
Route::resource('cart', 'CartController');
Route::post('proceedToCheckout/{id}', 'CartController@proceedToCheckout');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::get('paypal', 'CartController@paypal');
