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
        
        if($request->hasFile('picture')){

            $img = $request->file('picture');

            $imgExt = $request->file('picture')->getClientOriginalExtension();
            
            $fullname = uniqid().time().".".$imgExt;
            $img->storeAs('public/images',$fullname);
                
        }else{
            $fullname = 'default.png';
        }


    	$datatostore = new Todo;
    	$datatostore->detail = $todo_detail;
        $datatostore->images = $fullname;
    	$datatostore->save();
    	return redirect('todo')->with('success', 'New todo Added Successfully');
    }

    public function deleteTodo($id){
    	$todotodelete = Todo::findOrFail($id);
    	$todotodelete->delete();

    	return redirect('todo')
    	->with('success', 'Todo Deleted Successfully');
    }
    
    // Edit View Page
    public function edit($id)
    {
        $datas = Todo::find($id);
        return view('edit',compact('datas'));
    }

    public function update(Request $request,$id){
        $todo = Todo::find($id);
        $todo->detail = $request->todo; 
        if($todo->save()){
            return redirect('todo')->with('success','Todo Edited successfully');
        }
    }

}
