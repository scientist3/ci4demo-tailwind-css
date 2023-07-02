<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UsersModel();
        $items = $model->findAll();
        return $this->response->setJSON($items);
    }

    public function profile(){
        return view('profile');
    }
}
