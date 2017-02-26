<?php

namespace App\Http\Controllers;
use App\Mahasiswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data  = Mahasiswa::all();
    	   return View::make('awal')->with('dataList', $data);
    }
}
