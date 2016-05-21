<?php


    Route::post('/signup',
        ['as'=>'signup',
         'uses'=>'UserController@signup']
    );
   
    Route::post('/signin',
        ['as'=>'signin', 
         'uses'=>'UserController@signin'
        ]);
    
    Route::get('/',function(){
        return view('login_out.login');
    })->name('home');

    Route::get('/dashboard', [
        'middleware' => 'auth',
        'uses' => 'PostController@getdashboard',
        'as' => 'dashboard'
    ]);
    Route::post('/createpost',
        ['uses'=>'PostController@postcreatepost',
            'as'=>'creapost'
         ]
    );
Route::get('/postdelete/{post_id}',
        [
            'uses'=>'PostController@getpostdelete',
            'middleware' => 'auth',
            'as'=>'postdelete']
    );
Route::get('/logout',[
   'uses'=>'UserController@getlogout',
    'as'=>'logout'
]);
Route::get('/account',[
    'uses'=>'UserController@getAccount',
    'as'=>'account'
]);
Route::get('/userimage/{filename}',[
   'uses'=>'UserController@getUserImage',
    'as'=>'account.image',
    'middleware'=>'auth'
]);
Route::post('/update',[
    'uses'=>'UserController@postSave',
    'as'=>'account.save',
    'middleware'=>'auth'
]);

Route::post('/edit',[
        'uses'=>'PostController@ed',
        'as'=>'edit',
        'middleware'=>'auth'
    ]
);
Route::post('/like',[
        'uses'=>'PostController@PostLike',
        'as'=>'like',
        'middleware'=>'auth'
    ]
);
