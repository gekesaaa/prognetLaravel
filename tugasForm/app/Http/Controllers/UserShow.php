<?php

namespace App\Http\Controllers;
use App\Models\showUser;
use Illuminate\Http\Request;

class UserShow extends Controller
{
  
    public function show(Request $request)
{
    $input = $request->all();
    return view('showData', $input);
}
    
}
