<?php

namespace App\Http\Controllers\Auth\Panel;

use App\Http\Controllers\Controller;
use App\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('auth.panel.skills.index')->with(['skills' => $skills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.panel.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!is_numeric($request->percentage)) {
            return redirect()->route('skills.create')->with(['message' => 'Not numeric']);
        }

        Skill::create([
            'name' => $request->name,
            'percentage' => $request->percentage,
        ]);

        return redirect()->route('skills.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        return view('auth.panel.skills.edit')->with(['skill' => $skill]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        if (!is_numeric($request->percentage)) {
            return redirect()->route('skills.edit', $skill->id)->with(['message' => 'Not numeric']);
        }

        $skill->name = $request->name;
        $skill->percentage = $request->percentage;

        $skill->save();

        return redirect()->route('skills.index')->with(['message' => 'Record succesfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();

        return redirect()->route('skills.index');
    }
}
