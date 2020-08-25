<?php

namespace App\Http\Controllers\Auth\Panel;

use App\Education;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();

        return view('auth.panel.education.index')->with(['educations' => $educations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.panel.education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Education::create([
            'name' => $request->name,
            'school' => $request->school,
            'diploma' => $request->diploma,
            'start_year' => $request->start_year,
            'end_year' => $request->end_year,
        ]);

        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('auth.panel.education.edit')->with(['education' => $education]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $education->name = $request->name;
        $education->school = $request->school;
        $education->diploma = $request->diploma;
        $education->start_year = $request->start_year;
        $education->end_year = $request->end_year;

        $education->save();

        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index');
    }
}
