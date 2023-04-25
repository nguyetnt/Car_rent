<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\Order;
use App\Models\Admin;
use App\Controllers\CarController;

class AuthenticationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request, Response $response)
    {
        // Get all order from database
        $admin = Admin::where("email", "=", $request->email)->where("password", "=", $request->password)->first();

        if ($admin != null) {
            return redirect('/carsAdmin');
        } else {
            return view('login')->with('message', 'Wrong email and password');
        }
    }
}
