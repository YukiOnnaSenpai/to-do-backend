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

    public function save($data) {
        info($data);

        $todo = new Todo([
            'title' => $data['title'],
            'description'=> $data['description'],
            'priority'=> $data['priority'],
            'flag' => $data['flag'],
            'user_id' => auth()->user()->id
        ]);

        $todo->save();
    }

    public function update($data,$id) {
        
        $todo = Todo::find($id);
        $todo->title = $data['title'];
        $todo->description = $data['description'];
        $todo->priority = $data['priority'];
        $todo->flag = $data['flag'];
        $todo->save();
          
    }

    public function delete($id) {
        $todo = Todo::find($id);
        $todo->delete();
    }

}