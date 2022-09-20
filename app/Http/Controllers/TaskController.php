<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Task;
class TaskController extends Controller
{
    public function index(Request $request){

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
       return $dbTask;
    }

    public function edit(Request $request){
        return view('tasks.edit');
    }

    public function delete(Request $request){
        return redirect(route('home'));
    }
}
