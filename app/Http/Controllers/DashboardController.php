<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskModel;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session('user_id')) {
            return redirect('/login');
        }
        $TaskModel = new TaskModel();
        $AllTasks = $TaskModel->allTasks(session('user_id'));
        $data = [
            'allTasks' => $AllTasks,
        ];
        return view('Dashboard', $data);
    }
}
