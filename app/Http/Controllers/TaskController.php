<?php
namespace App\Http\Controllers;

use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{  //save task is used for daving the data into database
    public function save_task(Request $request)
    {
    	try{


    	
    	$taskd = new Task;
    	$taskd->task = $request->task;
    	$taskd->status = $request->status;
    	$taskd->save();
        
    }
		    catch(Exception $e) {
		  echo 'Message: ' .$e->getMessage();
		}
    
    	return view('create_task',compact('taskd'));

    }
   //show_task function is used for showing task list in view page
    public function show_task(Request $request)
    {

    	$tasks = task::all();
    	return view('view_task' , compact('tasks'));

    }


}
