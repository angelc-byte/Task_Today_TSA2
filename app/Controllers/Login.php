<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        if (session('isLoggedIn')) {
            return redirect()->to(site_url('tasks'));
        }
        return view('auth/login');
    }

    public function authenticate()
    {
        if (! $this->validate(['username' => 'required|max_length[50]', 'password' => 'required|max_length[255]'])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $user = (new UserModel())->where('username', trim((string) $this->request->getPost('username')))->first();
        if (! $user || ! password_verify((string) $this->request->getPost('password'), $user['password'])) {
            return redirect()->back()->withInput()->with('error', 'Invalid username or password.');
        }
        session()->regenerate(true);
        session()->set(['isLoggedIn' => true, 'user_id' => $user['id'], 'username' => $user['username'], 'full_name' => $user['full_name']]);
        return redirect()->to(site_url('tasks'))->with('success', 'Welcome back, ' . $user['full_name'] . '.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'))->with('success', 'You have been logged out.');
    }
}

