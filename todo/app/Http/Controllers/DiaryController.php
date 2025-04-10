<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
       public function index() {
        $diaries = auth()->user()->diaries()->latest()->get();
            return view("diaries.index", compact("diaries"));
          }

        public function create(Diary $create) {
            return view("diaries.create", compact("create"));
          }
        
        public function show(Diary $diary) {
          if ($diary->user_id !== auth()->id()) {
            abort(403); // Piekļuve liegta
          }
            return view("diaries.show", compact("diary"));
          }
        
        public function edit(Diary $diary) {
            return view("diaries.edit", compact("diary"));
          }

        public function destroy(Diary $diary) {
            $diary->delete();
            return redirect("/diaries");
            }
        
        public function update(Request $request, Diary $diary) {
            $validated = $request->validate([
              "title" => ["required"],
              "body" => ["required"],
              "date" => ["required", Rule::date()->format('Y-m-d')]
             ]);
    
            $diary->title = $validated["title"];
            $diary->body = $validated["body"];
            $diary->date = $validated["date"];
    
            $diary->save();
    
            return redirect("/diaries/" . $diary->id);;
    
          }
    
        public function store(Request $request) {
          
          $validated = $request->validate([
           "title" => ["required", "max:255"],
           "body" => ["required", "max:255"],
           "date" => ["required", Rule::date()->format('Y-m-d')]
          ]);

          auth()->user()->diaries()->create([
            "title" => $request->title,
            "body" => $request->body,
            "date" => $request->date
        ]);
          return redirect("/diaries");
          }
}
