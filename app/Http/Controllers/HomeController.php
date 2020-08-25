<?php

namespace App\Http\Controllers;

use App\Education;
use App\Employment;
use App\Profile;
use App\Project;
use App\Skill;
use App\Softskill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = Profile::all()->first();
        $educations = Education::all()->sortByDesc('end_year');
        $employments = Employment::all()->sortByDesc('end_year');
        $skills = Skill::all();
        $softskills = Softskill::all();
        $projects = Project::all();

        return view('home')->with(['profile' => $profile, 'educations' => $educations, 'employments' => $employments, 'skills' => $skills, 'projects' => $projects, 'softskills' => $softskills]);
    }
}
