<?php
namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function save_task(Request $request)
    {
    	$taskd = new Task;

    	$taskd->task = $request->task;

    	$taskd->save();

    	return view('create_task',compact('taskd'));

    }

    public function show_task(Request $request)
    {
    	$taskd = new Task;

    	$taskd->task = $request->task;

    	
    }


}
