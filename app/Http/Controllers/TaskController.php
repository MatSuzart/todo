<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
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

    public function edit(Request $request){
        return view('tasks.edit');
    }

    public function delete(Request $request){
        return redirect(route('home'));
    }
}
