<?php
namespace App\Controllers;

class TodoController{
    public function list(){
        # db
        $tasks = [
            'First Task',
            'Second Task',
            'Thirs Task',
            'Fourth Task',
            'Fifth Task'
        ];
        
        view('todo/list');
    }
}