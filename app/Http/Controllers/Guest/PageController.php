<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("guest.home");
    }

    public function about(){
      return view("guest.about");
  }

    public function portfolio(){
      $projects = Project::all();
      return view("guest.portfolio", compact("projects"));
  }

    public function contact(){
      return view("guest.contact");
  }

}
