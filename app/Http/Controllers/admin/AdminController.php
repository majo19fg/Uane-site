<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DesignRequest;
use function GuzzleHttp\json_decode;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designRequest = DesignRequest::whereYear('created_at', '=', 2019)
                        ->whereMonth('created_at', '=', 8)
                        ->get();

        // return json_decode($designRequest);


    $designers = DesignRequest::with('users')->get();
        
        return view('admin.home', compact('designers'));
    }
}
