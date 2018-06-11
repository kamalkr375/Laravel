<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use Validator;
use DB;

class CareerController extends Controller
{
     public function __construct()
     {
          $this->middleware('auth:admin');
     }

    public function index()
    {
          $brand = Career::orderBy('id', 'desc')->paginate(10);
          return view('admin.career-index',compact('career'));
    }

    public function create()
    {
          return view('admin.career-create');
    }
}
