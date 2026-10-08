<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();

        $data['customers'] = $model->findAll();

        return view('customers/index', $data);
    }


    public function new()
    {
        return view('customers/new');
    }


    public function create()
    {
        $model = new CustomerModel();

        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email',
            'phone'     => 'permit_empty',
            'avatar'    => 'permit_empty|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]',
        ];

        if (!$this->validate($rules)) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());

        }


        $avatarName = null;

        $avatar = $this->request->getFile('avatar');


        if (
            $avatar &&
            $avatar->isValid() &&
            !$avatar->hasMoved()
        ) {

            $avatarName =
                $avatar->getRandomName();

            $avatar->move(
                FCPATH . 'uploads/customers',
                $avatarName
            );

        }


        $model->insert([
            'full_name'  => $this->request->getPost('full_name'),
            'email'      => $this->request->getPost('email'),
            'phone'      => $this->request->getPost('phone'),
            'avatar'     => $avatarName,
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        return redirect()->to('/customers');
    }


    public function edit($id)
    {
        $model = new CustomerModel();

        $customer = $model->find($id);


        if (!$customer) {

            return redirect()->to('/customers');

        }


        return view('customers/edit', [
            'customer' => $customer
        ]);
    }


    public function update($id)
    {
        $model = new CustomerModel();

        $customer = $model->find($id);


        if (!$customer) {

            return redirect()->to('/customers');

        }


        $rules = [
            'full_name' => 'required',
            'email'     => 'required|valid_email',
            'phone'     => 'permit_empty',
            'avatar'    => 'permit_empty|is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]',
        ];


        if (!$this->validate($rules)) {

            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());

        }


        $avatarName =
            $customer['avatar'] ?? null;


        $avatar =
            $this->request->getFile('avatar');


        if (
            $avatar &&
            $avatar->isValid() &&
            !$avatar->hasMoved()
        ) {


            /*
             * Delete old avatar
             */

            if (!empty($avatarName)) {

                $oldAvatarPath =
                    FCPATH .
                    'uploads/customers/' .
                    $avatarName;


                if (is_file($oldAvatarPath)) {

                    unlink($oldAvatarPath);

                }

            }


            /*
             * Save new avatar
             */

            $avatarName =
                $avatar->getRandomName();


            $avatar->move(
                FCPATH . 'uploads/customers',
                $avatarName
            );

        }


        $model->update($id, [

            'full_name' =>
                $this->request->getPost('full_name'),

            'email' =>
                $this->request->getPost('email'),

            'phone' =>
                $this->request->getPost('phone'),

            'avatar' =>
                $avatarName,

        ]);


        return redirect()->to('/customers');
    }


    /*
     * =========================================================
     * DELETE CUSTOMER
     * =========================================================
     */

    public function delete($id)
    {
        $model = new CustomerModel();

        $customer = $model->find($id);


        /*
         * Customer does not exist
         */

        if (!$customer) {

            return redirect()
                ->to('/customers')
                ->with(
                    'error',
                    'Customer not found.'
                );

        }


        /*
         * Delete customer's avatar file
         */

        if (!empty($customer['avatar'])) {

            $avatarPath =
                FCPATH .
                'uploads/customers/' .
                $customer['avatar'];


            if (is_file($avatarPath)) {

                unlink($avatarPath);

            }

        }


        /*
         * Delete customer record
         */

        $model->delete($id);


        return redirect()
            ->to('/customers')
            ->with(
                'success',
                'Customer deleted successfully.'
            );
    }
}