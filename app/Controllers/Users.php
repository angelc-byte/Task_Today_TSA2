<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data['users'] = $model->findAll();

        return view('users/index', $data);
    }


    public function new()
    {
        return view('users/new');
    }


    public function create()
    {
        $model = new UserModel();

        $rules = [
            'username'  => 'required',
            'full_name' => 'required',
            'email'     => 'required|valid_email',
            'password'  => 'required|min_length[6]',
            'avatar'    => 'permit_empty|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]',
        ];

        if (!$this->validate($rules)) {

            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());

        }


        $data = [
            'username'   => $this->request->getPost('username'),
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'created_at' => date('Y-m-d H:i:s'),
        ];


        /*
         * HANDLE AVATAR UPLOAD
         */

        $avatar = $this->request->getFile('avatar');


        if (
            $avatar &&
            $avatar->isValid() &&
            !$avatar->hasMoved()
        ) {

            $uploadPath =
                FCPATH . 'uploads/avatars';


            /*
             * Create the avatar directory
             * if it does not exist.
             */

            if (!is_dir($uploadPath)) {

                mkdir(
                    $uploadPath,
                    0777,
                    true
                );

            }


            /*
             * Generate a random filename
             * to avoid duplicate filenames.
             */

            $newFileName =
                $avatar->getRandomName();


            $avatar->move(
                $uploadPath,
                $newFileName
            );


            $data['avatar'] =
                $newFileName;

        }


        $model->insert($data);


        return redirect()
            ->to('/users')
            ->with(
                'success',
                'User created successfully.'
            );
    }


    public function edit($id)
    {
        $model = new UserModel();

        $user = $model->find($id);


        if (!$user) {

            return redirect()
                ->to('/users');

        }


        return view(
            'users/edit',
            [
                'user' => $user
            ]
        );
    }


    public function update($id)
    {
        $model = new UserModel();

        $user = $model->find($id);


        if (!$user) {

            return redirect()
                ->to('/users')
                ->with(
                    'error',
                    'User not found.'
                );

        }


        /*
         * VALIDATION
         */

        $rules = [
            'username'  => 'required',
            'full_name' => 'required',
            'email'     => 'required|valid_email',
            'avatar'    => 'permit_empty|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]',
        ];


        if (!$this->validate($rules)) {

            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'errors',
                    $this->validator->getErrors()
                );

        }


        /*
         * BASIC USER INFORMATION
         */

        $data = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'email'     => $this->request->getPost('email'),
        ];


        /*
         * PASSWORD UPDATE
         *
         * Only change the password if the
         * user entered a new password.
         */

        $password =
            $this->request->getPost('password');


        if (!empty($password)) {

            $data['password'] =
                password_hash(
                    $password,
                    PASSWORD_DEFAULT
                );

        }


        /*
         * AVATAR UPDATE
         */

        $avatar =
            $this->request->getFile('avatar');


        if (
            $avatar &&
            $avatar->isValid() &&
            !$avatar->hasMoved()
        ) {

            $uploadPath =
                FCPATH . 'uploads/avatars';


            /*
             * Create the avatar directory
             * if it does not exist.
             */

            if (!is_dir($uploadPath)) {

                mkdir(
                    $uploadPath,
                    0777,
                    true
                );

            }


            /*
             * Generate a new random filename.
             */

            $newFileName =
                $avatar->getRandomName();


            /*
             * Move the uploaded image
             * into public/uploads/avatars.
             */

            $avatar->move(
                $uploadPath,
                $newFileName
            );


            /*
             * Delete the old avatar if one exists.
             */

            if (
                !empty($user['avatar'])
            ) {

                $oldAvatar =
                    $uploadPath .
                    DIRECTORY_SEPARATOR .
                    $user['avatar'];


                if (
                    is_file($oldAvatar)
                ) {

                    unlink($oldAvatar);

                }

            }


            /*
             * Save the new filename
             * to the users table.
             */

            $data['avatar'] =
                $newFileName;

        }


        /*
         * UPDATE DATABASE
         */

        $model->update(
            $id,
            $data
        );


        return redirect()
            ->to('/users')
            ->with(
                'success',
                'User updated successfully.'
            );
    }


    public function delete($id)
    {
        $model = new UserModel();

        $user = $model->find($id);


        if (!$user) {

            return redirect()
                ->to('/users')
                ->with(
                    'error',
                    'User not found.'
                );

        }


        /*
         * DELETE USER AVATAR FILE
         * BEFORE DELETING THE DATABASE RECORD.
         */

        if (
            !empty($user['avatar'])
        ) {

            $avatarPath =
                FCPATH .
                'uploads/avatars/' .
                $user['avatar'];


            if (
                is_file($avatarPath)
            ) {

                unlink($avatarPath);

            }

        }


        /*
         * DELETE USER RECORD
         */

        $model->delete($id);


        return redirect()
            ->to('/users')
            ->with(
                'success',
                'User deleted successfully.'
            );
    }
}