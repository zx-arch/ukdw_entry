<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function __construct()
	{
		$this->db = \Config\Database::connect();
        $this->tbl_user = $this->db->table('users');
	}

    public function index()
    {
        if (in_groups('admin')) {
            return redirect()->to('/admin/dashboard');
        } else if (in_groups('user')) {
            return redirect()->to('/user/dashboard');
        }
    }
}
