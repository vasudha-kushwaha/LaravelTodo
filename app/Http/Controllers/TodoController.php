<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}  
//tumhae routes ko sunday ko check karengai
//Todo Start
public function index(){
    return view('todos.todo');
}
public function home()
{
    return view('todos.myhome');
}
public function about()
{
    return view('todos.about');
}
public function blogs()
{
    return view('todos.blogs');
}
public function authors()
{
    return view('todos.authors');
}
public function adminlogin()
{
    return view('todos.adminlogin');
}
public function curd()
{
    return view('todos.curd');
}
//Todo End

}
