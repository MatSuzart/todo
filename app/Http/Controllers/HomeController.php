<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Taks;

class HomeController extends Controller
{
    public function index (Request $request){

        $tasks = Task::WHEREDATE('due_date', date('Y-M-D'))->get();

        
        $data['authUser'] = Auth::user();

        return view('home', ['tasks' => $tasks, 'authUser' =>$authUser]);
    }
}
