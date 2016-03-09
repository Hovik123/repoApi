<?php

namespace App\Http\Controllers;

use App\Http\Contract\PostSeviceInterface;
use App\Http\Requests;
use Illuminate\Http\Request;

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
    public function index(PostSeviceInterface $postSeviceInterface)
    {
        $items=$postSeviceInterface->select();
        return view('home',["items"=>$items]);
    }
}
