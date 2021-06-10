<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class HomeController extends Controller
{
    public function __construct() {
        // $this->data = DB::table('students');
        $this->data = new Student;
    }
    
    public function index()
    {
        $student = $this->data->orderBy('name', 'desc')->where('gender','L')->get();
        
        return view('home', [
            'student' => $student
        ]);
    }
}
