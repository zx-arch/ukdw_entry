<?php

namespace App\Controllers;

class User extends BaseController
{
    public function __construct()
	{
		$this->db = \Config\Database::connect();
        $this->tbl_user = $this->db->table('users');
	}
    public function dashboard()
    {
        $mydata = $this->tbl_user->select('auth_groups_users.user_id, auth_groups_users.group_id, users.username, users.email, users.password_hash')->join('auth_groups_users','users.id=auth_groups_users.user_id')->get()->getResultArray();

        return view('dashboard_user/dashboard',["title" => "Dashboard", "active" => "user", "mydata" => $mydata]);
    }
    public function komplain()
    {
        return view('dashboard_user/komplain',["title" => "Komplain", "active" => "user"]);
    }
}
