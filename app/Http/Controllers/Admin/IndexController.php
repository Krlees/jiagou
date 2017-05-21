<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Menu;
use Illuminate\Http\Request;
use Auth;

class IndexController extends BaseController
{
    public function index(Menu $menu)
    {
        return view('admin/uploads');
    }

    public function dashboard()
    {

        return view('admin/dashboard');
    }




}
