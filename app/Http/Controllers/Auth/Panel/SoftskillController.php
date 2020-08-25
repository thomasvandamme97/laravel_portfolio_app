<?php

namespace App\Http\Controllers\Auth\Panel;

use App\Http\Controllers\Controller;
use App\Softskill;
use Illuminate\Http\Request;

class SoftskillController extends Controller
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
        $softskills = Softskill::all();

        return view('auth.panel.softskills.index')->with(['softskills' => $softskills]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.panel.softskills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Softskill::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('softskills.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Softskill  $softskill
     * @return \Illuminate\Http\Response
     */
    public function edit(Softskill $softskill)
    {
        return view('auth.panel.softskills.edit')->with(['softskill' => $softskill]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Softskill  $softskill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Softskill $softskill)
    {
        $softskill->name = $request->name;
        $softskill->description = $request->description;

        $softskill->save();

        return redirect()->route('softskills.index')->with(['message' => 'Record succesfully updated.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Softskill  $softskill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Softskill $softskill)
    {
        $softskill->delete();

        return redirect()->route('softskills.index');
    }
}
