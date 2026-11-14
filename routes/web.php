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
    $tasks=DB::table('tasks')-> get();

return view('tasks' , compact('tasks') );

});

route:: post('create',function(){

$task_name = $_POST['name'];
DB::table('tasks')->insert(["name"=> $task_name]);
return redirect()->back();
});

route::post('delete/{id}',function($id){

DB::table('tasks')->where('id' , $id)->delete();


return redirect()->back();
});

route::post('edit/{id}',function($id){

$task= DB::table('tasks')->where('id',$id)->first();
 $tasks = DB::table('tasks')->get();
return view ('tasks' , compact('task','tasks'));

});

Route::post('update/{id}', function ($id) {
    $task_name = $_POST['name'];

    DB::table('tasks')
        ->where('id', $id)
        ->update(['name' => $task_name]);

    return redirect('/tasks');
});
