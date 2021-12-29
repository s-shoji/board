<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $sum = $this->sumUser();

        return view('users/index', [
            
            'sum' => $sum,
        ]);
    }
    private function sumUser()
    {
       $sumUsers = User::all()->where('created_at', '>=',  date_format(now(),'%Y-%m-01'))->count();
       return $sumUsers;
    }
}
