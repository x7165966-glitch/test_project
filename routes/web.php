<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

$name = "ahmed";

//return view('about')->with('name' , $name);
return view('/about',compact('name','departments') );

});


route::post('about',function(){


$name = $_POST['name'];
$departments = [
    '1'=> 'Tichnical',
    '2'=> 'finance',
    '3'=> 'sales',

];

return view('about',compact ('name', 'departments'));

});

