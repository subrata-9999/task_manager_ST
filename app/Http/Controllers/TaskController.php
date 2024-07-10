<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;

class TaskController extends Controller
{
    //Go To Add Task
    public function go_to_addTask(){
        if (!session('user_id')) {
            return redirect('/login');
        }
        return view('Task.AddTask');
    }
    //Add Task
    public function addTask(Request $request){

        $request->validate([
            'task_name' => 'required|string|max:255',
            'task_description' => 'required|string',
            'task_due_date' => 'required|date',
        ]);
        
        TaskModel::create([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'task_due_date' => $request->task_due_date,
            'task_status' => 'Pending',
            'user_id' => session('user_id'),
        ]);

        return redirect('/Dashboard')->with('success', 'Task added successfully!');
    }
    //Delete Task
    public function deleteTask($task_id){
        TaskModel::where('task_id', $task_id)->delete();
        return redirect('/Dashboard')->with('success', 'Task deleted successfully!');
    }
    //Go TO Edit Task
    public function editTask($task_id){
        if (!session('user_id')) {
            return redirect('/login');
        }
        $Task = TaskModel::where('task_id', $task_id)->first();
        $data = [
            'task' => $Task,
        ];
        return view('Task.EditTask', $data);
    }
    //Update Task
    public function updateTask(Request $request){
        $request->validate([
            'task_name' => 'required|string|max:255',
            'task_description' => 'required|string',
            'task_due_date' => 'required|date',
        ]);
        
        TaskModel::where('task_id', $request->task_id)->update([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description,
            'task_status' => $request->task_status,
            'task_due_date' => $request->task_due_date,
        ]);

        return redirect('/Dashboard')->with('success', 'Task updated successfully!');
    }
    
}
