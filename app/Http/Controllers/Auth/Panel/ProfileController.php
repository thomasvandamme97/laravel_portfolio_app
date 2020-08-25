<?php

namespace App\Http\Controllers\Auth\Panel;

use App\Http\Controllers\Controller;
use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
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
        $profile = Profile::all()->first();

        return view('auth.panel.profile.index')->with(['profile' => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('auth.panel.profile.edit')->with(['profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        // If there is a file uploaded
        if ($request->file) {
            // Delete the existing one
            Storage::delete('profile/' . $profile->image);

            // Update existing file name to new file name
            $profile->image = $request->file->getClientOriginalName();

            // Store the uploaded file into storage
            $request->file->storeAs('profile', $request->file->getClientOriginalName());
        }

        if ($request->cv_file) {
            Storage::delete('cv/' . $profile->cv);

            $profile->cv = $request->cv_file->getClientOriginalName();

            $request->cv_file->storeAs('cv', $request->cv_file->getClientOriginalName());
        }

        // Update all remaining fields to request data
        $profile->first_name = $request->first_name;
        $profile->last_name = $request->last_name;
        $profile->title = $request->title;
        $profile->age = $request->age;
        $profile->phone = $request->phone;
        $profile->email = $request->email;
        $profile->address = $request->address;
        $profile->linkedin = $request->linkedin;
        $profile->github = $request->github;
        $profile->description = $request->description;

        // Save the instance to the database
        $profile->save();

        // Redirect back to profile.index
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
