<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

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
        $users = User::where('admin', 0)->count();
        $laki = Detail::where('gender', 'laki-laki')->count();
        $prempuan = Detail::where('gender', 'perempuan')->count();
        $data = Detail::all();

        return view('home', [
            'men' => $laki,
            'whomen' =>  $prempuan,
            'other' => 0,
            'users' => $users,
            'data' => $data,
        ]);
    }
}
