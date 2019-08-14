<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       if (Laratrust::hasRole('admin')){
           return $this->adminDasboard();
       }
       if (Laratrust::hasRole('member')) {
           return $this->memberDashboard();
       }
       return view('home');
    }

    protected function adminDasboard()
    {
        return redirect('/admin/home');
    }
    protected function memberDashboard()
    {
        return view('home');
    }
}
