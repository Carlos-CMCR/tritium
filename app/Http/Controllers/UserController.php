<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $response = User::where('id','!=',auth()->id())->get(['id','name', 'email', 'created_at']);
        return  response()->json($response, 200);
    }
}
