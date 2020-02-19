<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Task;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$user_id =auth()->user()->id;
        //$user =user::find($user_id);
        $user = auth()->user();
        $tasks =$user->tasks()->paginate(4);
        //return view('home')->with('tasks',$user->tasks);
        return view('home')->with('tasks',$tasks);
    }
}
