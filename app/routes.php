<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::any('/', array("as" => "home",
		      function() { return View::make('hello'); }
		)
);


Route::get('ola/{usuario?}', 'HomeController@ola');


/*    listing tasks    */
Route::any('task', 'TaskController@listar');
Route::any('tasks', 'TaskController@listar');

/*    adding tasks routes    */
Route::get('task/add', array("as" => "addTask", "uses" => 'TaskController@getAdd'));
Route::post('task/add', 'TaskController@postAdd');

/*    checking tasks    */
Route::post('task/check', 'TaskController@check');



/*    lists    */
Route::get('list/create', 'ListController@getCreate');
Route::post('list/create', 'ListController@postCreate');