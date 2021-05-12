<?php 

namespace App\Http\Controllers;    
 
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\CustomClass\record_log;
 
class loginController extends Controller
{ 
public function login(Request $request)
    {
.......................
record_log::save_log($api_token,'access login',json_encode($request->all()));
.......................
    } 
}

public function Serps(Request $request)
    { 
.......................
record_log::save_log($serps,' ',json_encode($request->all())); 
.......................
    } 

 




