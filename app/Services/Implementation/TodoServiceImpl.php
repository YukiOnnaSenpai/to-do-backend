<?php

namespace App\Services\Implementation;

use App\Services\TodoService;
use App\Todo;

class TodoServiceImpl implements TodoService{

    public function index() {
        $currentUser = auth()->user();
        $todos = Todo::where('user_id', $currentUser->id)->get();
        return $todos;
        
    }

    public function save($request) {

        info($request);

          $todo = new Todo([
            'title' => $request->get('title'),
            'description'=> $request->get('description'),
            'priority'=> $request->get('priority'),
            'flag' => $request->get('flag'),
            'user_id' => auth()->user()->id
          ]);

          $todo->save();
    }

    public function update($request, $id) {
        
          $todo = Todo::find($id);
          $todo->title = $request->get('title');
          $todo->description = $request->get('description');
          $todo->priority = $request->get('priority');
          $todo->flag = $request->get('flag');
          $todo->save();
          
    }

    public function delete($id) {
        $todo = Todo::find($id);
        $todo->delete();
    }

}