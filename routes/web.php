<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {  /// Route ke likhne ka pahla tarika
    return view('post');
});

Route::view('about','/about');  ///route ke likhne ka dusra tarika

Route::get('/hello', function () {  /// Route ke likhne ka third way hai jaha hum router aur view ka name diffrent rakhe hai
    return view('home');
});

Route::get('/post/firstpost', function () {  /// yha route ke under sab route banate hai
    return view('mydetail');
});

// Router Components

Route::get('/chandan', function () {  /// Route ke likhne ka pahla tarika
    return view('chan');
});



//1
Route::get('/chandan/{id}',function(string $id){
    return "<h1> Post ID:" .$id. "</h1>";
});    ///aise me browser pr id dena prta hai manuble like
///http://127.0.0.1:8000/chandan/52
///http://127.0.0.1:8000/chandan/5

// Route::get('/chandan1', function () {  /// Route ke likhne ka pahla tarika
//     return view('postOptional');                                            
// });



//2 optional
// Route::get('/chandan1/{id?}',function(string $id=null){
//     if($id){
//      return "<h1> Post ID:" .$id. "</h1>";
//     }
//     else{
//         return "<h1>No Found ID</h1>";
//     }
// }); 



//More than optional comment like that
Route::get('/chandan1/{id?}/comment/{commentid?}',function(string $id=null, string $commentid=null){
    if($id){
     return "<h1> Post ID:" .$id. "</h1><h2>" .$commentid."</h2>";
    }
    else{
        return "<h1>No Found ID </h1>";
    }
});            ///http://127.0.0.1:8000/chandan1/5/comment/hii aise check krna hai



/// Router Constraints
Route::get('/chandan1/{id}',function(string $id){
    if($id){
     return "<h1> Post ID:" .$id. "</h1>";
    }
    else{
        return "<h1>No Found ID</h1>";
    }
})->whereIn('id' ,['ram', 'shyam','mohan','satyam']); // yja se condtion lga skte hai  // ye chalane ke liye uper  //2 optional ko comment ke do
/**
 * ->whereNumber('id);
 * ->whereAlpha('id');
 * ->whereAphaNumeric('id');
 * ->whereIn('id' ,['ram', 'shyam','mohan','satyam']);
 *->where('id' '[(0-9)+]');
 */




 /// Name Router ka use
 Route::get('/NamePage', function(){
    return view('NamePage');
 });

 //Ab hum Name page ke under me 3 Router banayege
 Route::get('/NamePage/firstPage', function(){
    return 'FirstPage';
 });

 Route::get('/NamePage/secondPage', function(){
    return 'SecondPage';
 });

 Route::get('/NamePage/thirdPage', function(){
    return 'ThirdPage';
 });


 ///ab Hum chahte hai '/NamePage/firstPage'  firstpage Router ke name ke jagh kuchh bhi likhe pr open ho first page hi eske liye Name Router ka use krte hai
 //EX:-
  Route::get('/NamePage/Kuchh_bhi_likh_skte_ho', function(){
    return 'FirstPage';
 })->name('FirstPage');

  Route::get('/NamePage/secondPagebkjxcvb', function(){
    return 'SecondPage';
 })->name('Second');

Route::get('/NamePage/thirdPage_kuchh_bhi_likho', function(){
    return 'ThirdPage';
 })->name('Third');


 /// Redirect Route Name
Route::get('/ApnaPage',function(){
    return view('NamePage');
});
Route::redirect('/NamePage','/ApnaPage');




//// Router Group 
Route::get('/GroupRouter',function(){
   return view('GroupRouter');
});

Route::prefix('GroupRouter')->group(function(){
    Route::get('/Group1' ,function(){
       return "ye Group1 ka Page hai";
    });
     Route::get('/Group2' ,function(){
       return "ye Group2 ka Page hai";
    });
     Route::get('/Group3' ,function(){
       return "ye Group3 ka Page hai";
    });
     Route::get('/Group4' ,function(){
       return "ye Group4 ka Page hai";
    });
     Route::get('/Group5' ,function(){
       return "ye Group5 ka Page hai";
    });
});


///fallback ye tab use krte hai jab hamare Project me koi Pge n ho Ur error ke jagr ye likha aaye
route::fallback(function(){
  //return "Page Note Found";
  // ya nhi to koi file ke name 
  return view('fallback');
});


//Blade Some operation
route::get('/blade', function(){
   return view('BasicBlade');
});


//Opertion of Include function
route::get('/pages/Home', function(){
   return view('pages.HomePage');
});

Route::prefix('pages')->group(function(){
    Route::get('/about' ,function(){
       return view('pages.about');
    });

    Route::get('/service' ,function(){
       return view('pages.service');
    });
    Route::get('/contact' ,function(){
       return view('pages.contact');
    });
    
});


//Opertain of blade Inheritance
route::get('Inheritance/Masterlayout', function(){
    return view('inheritance.masterlayout');
});

Route::prefix('Inheritance')->group(function(){
    Route::get('/about' ,function(){
       return view('Inheritance.About');
    });

    Route::get('/detail' ,function(){
       return view('Inheritance.Detail');
    });
    Route::get('/post' ,function(){
       return view('Inheritance.Post');
    });
    
});