<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use DB;
// use Session;
use Mail;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

session_start();


class AdminController extends Controller
{

    public function index()
    {
        return view('admin_login');
    }

    public function showdashboard()
    {
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return view('admin.dashboard');
        } else {
            Session::put('message', 'mat khau hoac email khong dung, nhap lai nhe');
            return Redirect::to('/admin');
        }
    }
    public function logout()
    {
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
}
