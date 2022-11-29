<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;
class TaskController extends Controller
{
    public function index(Request $request){

    }

    public function update(Request $request){
       $task = Task::findOrFail($request->taskId);
       $task->is_done = $request->$status;
       $task->save();

       return ['success' => true];
    }

    public function create(Request $request){
        $categories = Category::all();

      //  $data = [];
        $data['categories'] = $categories;
        return view('taks.create', $data);
    }

    public function create_action(Request $request){
       // dd($request->all());
       $task = $request->only(['title','category_id', 'discription','due_date']);

       //$task['user_id'] = 1;

       $dbTask = Task::create($task);
       return redirect(route('home'));
    }

    public function edit(Request $request){
        $id = $request->id;

        $task = Task::find($id);
        if(!task){
            return redirect(route('home'));

        }
        $categories =Category::all();
        $data['categories'] = $categories;

        $data['task'] = $task;
        return view('tasks.edit');
    }

    public function edit_action(Request $request){
        //$request_data  = $request->

        $requestData = $request->only(['id','title','due_data','category_id','description']);

        $requestData['is_done'] = $request->is_done ? true : false;

        $task = Task::find($request->id);

            if(!$task){
                return 'error';
            }

            $task->update($requestData);
            $task->save();

            return redirect(route('home'));
    }

    public function delete(Request $request){
        $id = $request->id;

        $task =  Task::find($id);
        if($task){
            $task->delete();
        }

        return redirect(route('home'));
    }
}
