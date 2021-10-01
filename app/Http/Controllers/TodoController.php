<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('main',compact('todos'));
    }

    public function addTodo(){

    	return view('addtodoform');
    }

    public function storeTodo(Request $request){
    	$todo_detail = $request->todo;
    	$datatostore = new Todo;
    	$datatostore->detail = $todo_detail;
    	$datatostore->save();
    	return redirect('todo')->with('success', 'New todo Added Successfully');
    }

    public function deleteTodo($id){
    	$todotodelete = Todo::findOrFail($id);
    	$todotodelete->delete();

    	return redirect('todo')
    	->with('success', 'Todo Deleted Successfully');
    }


}
