<?php

namespace App\Controllers;

use App\Models\TaskModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Tasks extends BaseController
{
    private const RULES = [
        'title' => 'required|min_length[3]|max_length[150]',
        'task_date' => 'required|valid_date[Y-m-d]',
        'status' => 'required|in_list[pending,completed]',
    ];

    public function index()
    {
        return view('tasks/index', [
            'tasks' => (new TaskModel())->active()->orderBy('task_date', 'ASC')->orderBy('id', 'ASC')->findAll(),
        ]);
    }

    public function new()
    {
        return view('tasks/form', ['task' => null, 'pageTitle' => 'Create Task']);
    }

    public function create()
    {
        if (! $this->validate(self::RULES)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        (new TaskModel())->insert($this->taskData());
        return redirect()->to(site_url('tasks'))->with('success', 'Task created successfully.');
    }

    public function edit(int $id)
    {
        return view('tasks/form', ['task' => $this->findActiveTask($id), 'pageTitle' => 'Edit Task']);
    }

    public function update(int $id)
    {
        $this->findActiveTask($id);
        if (! $this->validate(self::RULES)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        (new TaskModel())->update($id, $this->taskData());
        return redirect()->to(site_url('tasks'))->with('success', 'Task updated successfully.');
    }

    public function archive(int $id)
    {
        $this->findActiveTask($id);
        (new TaskModel())->update($id, ['is_archived' => 1]);
        return redirect()->to(site_url('tasks'))->with('success', 'Task archived successfully.');
    }

    private function taskData(): array
    {
        return [
            'title' => trim((string) $this->request->getPost('title')),
            'description' => trim((string) $this->request->getPost('description')),
            'task_date' => $this->request->getPost('task_date'),
            'status' => $this->request->getPost('status'),
        ];
    }

    private function findActiveTask(int $id): array
    {
        $task = (new TaskModel())->active()->find($id);
        if ($task === null) {
            throw PageNotFoundException::forPageNotFound('Task not found.');
        }
        return $task;
    }
}

