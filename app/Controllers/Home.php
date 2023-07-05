<?php

namespace App\Controllers;

use App\Entities\User;
use App\Models\Users;

class Home extends BaseController
{
    public function index()
    {
        $usersModel = new Users();
        $data = [
            "users" => $usersModel->findAll()
        ];
        return view('home', $data);
    }
    public function edit($id)
    {
        $usersModel = new Users();
        $data = [
            "person" => $usersModel->find($id)
        ];
        return view('edit/edit', $data);
    }
    public function new()
    {
        return view('edit/edit');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function save()
    {
        $postData = $this->request->getPost();
        $usersModel = new Users();
        $user = new User();
        $user->fill($postData);
        $usersModel->save($user);
        return $this->response->redirect(base_url("/"));
    }
    public function delete($id)
    {
        $usersModel = new Users();
        $usersModel->delete($id);
        return $this->response->redirect(base_url("/"));
    }
}
