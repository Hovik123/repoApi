<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Contract\PostSeviceInterface;

class LessonsController extends Controller
{
    public function index(PostSeviceInterface $postSeviceInterface){
        if($postSeviceInterface->select())
        {

        }
    }
}
