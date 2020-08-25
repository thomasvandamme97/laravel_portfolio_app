@extends('auth.panel.layouts.app')

@section('content')
    <h1>Profile</h1>
    <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="form-row row">
                    <div class="form-group col-6">
                        <label for="first_name">First name</label>
                        <input class="form-control" type="text" name="first_name" value="{{ $profile->first_name }}" placeholder="first name" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="last_name">Last name</label>
                        <input class="form-control" type="text" name="last_name" value="{{ $profile->last_name }}" placeholder="last name" required>
                    </div>
                </div>
                <div class="form-row row">
                    <div class="form-group col-6">
                        <label for="title">Title</label>
                        <input class="form-control" type="text" name="title" value="{{ $profile->title }}" placeholder="title" required>
                    </div>
                    <div class="form-group col-6">
                        <label for="age">Age</label>
                        <input class="form-control" type="number" name="age" value="{{ $profile->age }}" placeholder="00" required>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="4" required>{{ $profile->description }}</textarea>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="text" name="phone" value="{{ $profile->phone }}" placeholder="0000 00 00 00" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" value="{{ $profile->email }}" placeholder="example@example.com" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input class="form-control" type="text" name="address" value="{{ $profile->address }}" placeholder="adres" required>
        </div>

        <hr class="my-4">

        <div class="form-row row">
            <div class="form-group col-6">
                <label for="linkedin">LinkedIn(optional)</label>
                <input class="form-control" type="text" name="linkedin" value="{{ $profile->linkedin }}" placeholder="www.linkedin.com/in/name-lastname">
            </div>
            <div class="form-group col-6">
                <label for="github">Github(optional)</label>
                <input class="form-control" type="text" name="github" value="{{ $profile->github }}" placeholder="www.github.com/username">
            </div>
        </div>

        <hr class="my-4">

        <div class="form-row row">
            <div class="form-group col-6">
                <label for="file">Upload Profile Picture</label>
                <input class="form-control-file" type="file" name="file">
            </div>
            <div class="form-group col-6">
                <label for="cv_file">Upload CV</label>
                <input class="form-control-file" type="file" name="cv_file">
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="UPDATE PROFILE">
    </form>
@endsection
