<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Task;
use Illuminate\Http\Request;

Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
    return view('welcome');
	});

	// Authentication Routes...
	Route::auth();

	Route::get('/tasks', 'TaskController@index');
	Route::post('/task', 'TaskController@store');
	Route::delete('/task/{task}', 'TaskController@destroy');



    /**
     * Show Task Dashboard
     */
    // Route::get('/', function () {
    // 	 //print_r($tasks); exit();
    //     return view('tasks', [
    //         'tasks' => Task::orderBy('created_at', 'asc')->get()
    //     ]);
    // });

    /**
     * Add New Task
     */
//     Route::post('/task', function (Request $request) {
//         $validator = Validator::make($request->all(), [
//             'name' => 'required|max:255',
//             'assignBy' => 'required|max:255',
//         ]);

//         if ($validator->fails()) {
//             return redirect('/')
//                 ->withInput()
//                 ->withErrors($validator);
//         }

//         $task = new Task;
//         $task->name = $request->name;
//         $task->assignBy = $request->assignBy;
//         $task->save();

//         return redirect('/');
//     });

//     /**
//      * Delete Task
//      */
//     Route::delete('/task/{id}', function ($id) {
//         Task::findOrFail($id)->delete();

//         return redirect('/');
//     });


//     /**
//      * Edit Task
//      */
//     Route::PATCH('/tasks/{id}', function ($id) {
//     	$task = Task::findOrFail($id);

//     	//print_r($id);exit();
//         //Task::findOrFail($id)->delete();

//         return redirect('/');
//     });
 });

// Route::auth();

// Route::get('/home', 'HomeController@index');
