<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Taks;

class HomeController extends Controller
{
    public function index (Request $request){

        $tasks = Task::WHEREDATE('due_date', date('Y-m-d'))->get();


        $data['authUser'] = Auth::user();

        $data['tasks_count'] = $data['tasks']->count();
        $data['undone_tasks_count'] = $data['tasks']->where('is_done', false)->count();

        return view('home', $data);
    }
}
