<?php


    Route::post('/signup',['as'=>'signup','uses'=>'UserController@signup']);
   
    Route::post('/signin',['as'=>'signin','uses'=>'UserController@signin']);
    
    Route::get('/',function(){
        return view('login_out.login');
    })->name('home');

    Route::get('/dashboard', [
        'middleware' => 'auth',
        'uses' => 'PostController@getdashboard',
        'as' => 'dashboard'
    ]);
    Route::post('/createpost',
        ['uses'=>'PostController@postcreatepost','as'=>'creapost']
    );


