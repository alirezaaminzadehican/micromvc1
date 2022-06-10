<?php
namespace App\Controllers;

class TodoController{
    public function list(){
        # db
        

        $data = [
            'tasks'=> ['First Task',
            'Second Task',
            'Thirs Task',
            'Fourth Task',
            'Fifth Task'],
            'title' => 'لیست تسک ها'
        ];

        // view('todo/list',$data);
        
    }
}