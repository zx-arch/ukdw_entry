<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('dashboard_admin/dashboard',["title" => "Dashboard", "active" => "admin"]);
    }
    public function users() {
        return view('dashboard_admin/users',["title" => "Users"]);
    }
    public function rooms() {
        return view('dashboard_admin/rooms',["title" => "Rooms"]);
    }
    public function komplain() {
        return view('dashboard_admin/komplain',["title" => "Komplain"]);
    }
}
