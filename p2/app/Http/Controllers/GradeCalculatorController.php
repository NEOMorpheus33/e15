<?php 

namespace App\Http\Controllers;  

use Illuminate\Http\Request; 

class GradeCalculatorController extends Controller  
{
    public function index() { 
        return view('welcome');  
        } 

        public function process(Request $request) {  
        $passing = $request->passing;
        $school = $request->school; 
        
        $request->validate([
        'passing' => 'required',
        'school' => 'required' 
    ]);

    dump($request->all()); 

    }   

} 



   


