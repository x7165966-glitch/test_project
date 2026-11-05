<?php

use Illuminate\Support\Facades\Route;
use Psy\Readline\Interactive\Actions\InsertCloseBracketAction;
use Illuminate\Support\Facades\DB;


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

route::get('tasks',function(){

return view('tasks');

});

route:: post('create',function(){

$task_name = $_POST['name'];
DB::table('tasks')->insert(["name"=> $task_name]);
return view ('tasks');
});
