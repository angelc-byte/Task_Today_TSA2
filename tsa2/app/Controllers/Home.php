<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome', [
            'tasks' => (new TaskModel())->active()->where('task_date', date('Y-m-d'))->orderBy('id', 'ASC')->findAll(),
        ]);
    }
}
