<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only.
 * It is not recommended using it in production as it is.
 */

namespace App\Controllers;

use Abc\Base\BaseController;
use Abc\Utility\RandomCharGenerator;
use Abc\Utility\Stringify;
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

        // echo '<pre>';
        // print_r($users);

        $this->view('user/index', [
            'users' => $users,
            'total_users' => $number_of_users
        ]);
    }

    public function add()
    {
        $data = [
            'name' => Stringify::titlelize(RandomCharGenerator::name() . ' ' . RandomCharGenerator::name()),
            'address' => Stringify::titlelize(RandomCharGenerator::address()),
            'location' => Stringify::titlelize(RandomCharGenerator::address()),
        ];

        if($this->model->create($data)) {
            // echo 'User added successfully';
            header('Location: /user/index');
        } else {
            // echo 'Operation failed!';
            header('Location: /user/index');
        }
    }
}