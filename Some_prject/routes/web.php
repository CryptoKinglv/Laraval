<?php


Route::get('/',function() {
    return view('pages/index')->with(['page'=>'index']);
});
Route::get('/articles',function() {
    return view('pages/articles')->with(['page'=>'articles']);
});
Route::get('/article',function() {
        return view('pages/article')->with(['page'=>'article']);
    });
Route::get('/chat',function() {
            return view('pages/chat')->with(['page'=>'chat']);
        });


Route::get('/about_us',function() {
    return view('pages/about_us')->with(['page'=>'about_us']);
});

Route::get('/regestration',function() {
    return view('pages/regestration')->with(['page'=>'regestration']);
});

Route::post('/regestration', 'AccountController@storeUser');



// Route::post('/regestration', function(Request $request){
//     $rules = [
//         'username' => 'required' , 
//         'first_name' => 'required' , 
//         'password' => 'required|min:8|same:password2'
//     ];


// });





// () {


//     

// Route::post('/chat/save-message','AccountController@saveChatMessage');
// Route::get('/chat/get-messages','AccountController@saveChatMessage' );
?>