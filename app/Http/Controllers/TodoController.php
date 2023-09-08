<?php

namespace App\Http\Controllers;
use App\Models\Persons  ;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    function addItem(Request $request){
        $todo = new Persons();
        
        $todo->TodoItem = $request->item;
        $todo->save();
        return redirect("/");


    }

    function getTodo(){
        $todo =Persons::all();
        return view("welcome",compact('todo'));
    }

    function deleteItem($id){
        $todo = Persons::find($id);
        $todo->delete();
        return redirect("/");


    }

    function editItem($id){
        $todo = Persons::find($id);
        return view("edit",compact('todo'));


    }
    function updateItem(Request $request){
        $todo = Persons::find($request->id);
        $todo->TodoItem = $request->item;
        $todo->save();
        return redirect("/");


    }
}
