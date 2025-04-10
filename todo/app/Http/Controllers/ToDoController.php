<?php

namespace App\Http\Controllers;
use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index(){
      $todos = auth()->user()->todos()->latest()->get();
        return view("todos.index", compact("todos"));
    }

    public function create(ToDo $create) {
        return view("todos.create", compact("create"));
      }
    
    public function show(ToDo $todo) {
      if ($todo->user_id !== auth()->id()) {
        abort(403); // Piekļuve liegta
      }
        return view("todos.show", compact("todo"));
      }

    public function edit(ToDo $todo) {
        return view("todos.edit", compact("todo"));
      }
    
    public function destroy(ToDo $todo) {
      $todo->delete();
      return redirect("/todos");
      }
    
      public function update(Request $request, ToDo $todo) {
        $validated = $request->validate([
          "content" => ["required"],
          "completed" => ["boolean"]
         ]);

        $todo->content = $validated["content"];
        $todo->completed = $validated["completed"];

        $todo->save();

        return redirect("/todos/" . $todo->id);;

      }

    public function store(Request $request) {
      
      $validated = $request->validate([
       "content" => ["required", "max:255"]
      ]);
    
      auth()->user()->todos()->create([
        'content' => $request->input('content'),
        'completed' => false,
    ]);
      return redirect("/todos");
      }


} 