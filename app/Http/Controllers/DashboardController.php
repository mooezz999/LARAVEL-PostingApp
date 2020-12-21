<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\PostLiked;

class DashboardController extends Controller
{
    //

    public function __construct(){
        $this->middleware(['auth']);
    }

    function index(){

        return view('dashboard');
    }
}
