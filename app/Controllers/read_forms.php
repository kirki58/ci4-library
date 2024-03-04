<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class read_forms extends BaseController
{
    protected $helpers = ['url', 'form'];
    function read_admin(){
        $data = [
            'name' => esc($this->request->getPost("name")),
            'password' => esc($this->request->getPost("password"))
        ];
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM library.admins");
        foreach ($query->getResult() as $row) {
            if($data['name'] == $row->name and password_verify($data['password'], $row->password)){
                return redirect()->to("AdminHome");
            }
            else{
                return redirect()->back();
            }
        }
        $db->close();
    }
}