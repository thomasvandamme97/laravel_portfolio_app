<?php

namespace App\Http\Controllers\Auth\Panel;

use App\Employment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employments = Employment::all();

        return view('auth.panel.employment.index')->with(['employments' => $employments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.panel.employment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Employment::create([
            'title' => $request->title,
            'company' => $request->company,
            'description' => $request->description,
            'start_year' => $request->start_year,
            'end_year' => $request->end_year,
        ]);

        return redirect()->route('employment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show(Employment $employment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        return view('auth.panel.employment.edit')->with(['employment' => $employment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employment $employment)
    {
        $employment->title = $request->title;
        $employment->company = $request->company;
        $employment->description = $request->description;
        $employment->start_year = $request->start_year;
        $employment->end_year = $request->end_year;

        $employment->save();

        return redirect()->route('employment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employment $employment)
    {
        $employment->delete();

        return redirect()->route('employment.index');
    }
}
