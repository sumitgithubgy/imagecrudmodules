<?php 

namespace Moduleimage\Path;
use Illuminate\Support\Facades\Route;


Route::get('path',function()
{
    echo "hello";
});
// Route::view('hello','hello');




Route::get('addimage',function()
 {
       return view('Path::addimage');
});

Route::post('add',[imagecontroller::class,'insert']);

Route::get('index',[imagecontroller::class,'show']);

Route::get('update/{id}',[imagecontroller::class,'edit']);

Route::post('updates',[imagecontroller::class,'update'])->name('updates');

Route::get('delete/{id}',[imagecontroller::class,'delete']);

