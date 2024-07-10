<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = [
        'task_name',
        'task_description',
        'task_due_date',
        'task_status',
        'user_id',
    ];

    public function allTasks($user_id){
        return TaskModel::where('user_id', $user_id)->get();
    }
    
}
