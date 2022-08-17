<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only.
 * It is not recommended using it in production as it is.
 */

namespace App\Controllers;

use Abc\Base\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function __construct() {
        parent::__construct('user');
    }

    public function index()
    {
        $users = $this->model->read();
        $number_of_users = $this->model->count();

        $this->view('user/index', [
            'users' => $users
        ]);
    }

    public function add()
    {
        $data = [
            'name' => 'Jean Kyle',
            'address' => 'Al Rahma',
            'location' => 'Kilimani',
        ];

        if($this->model->create($data)) {
            echo 'User added successfully';
        } else {
            echo 'Operation failed!';
        }
    }
}