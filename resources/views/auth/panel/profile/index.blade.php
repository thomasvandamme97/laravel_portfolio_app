@extends('auth.panel.layouts.app')

@section('content')
    <h1>Profile</h1>
    <form>
        @csrf
        <div class="row">
            <div class="col-2">
                <div class="form-group">
                    <img class="img-fluid" src="/storage/profile/{{ $profile->image }}" alt="">
                </div>
            </div>
            <div class="col-10">
                <div class="form-row row">
                    <div class="form-group col-5">
                        <label for="first_name">First name</label>
                        <input class="form-control" type="text" name="first_name" value="{{ $profile->first_name }}" placeholder="first name" disabled>
                    </div>
                    <div class="form-group col-5">
                        <label for="last_name">Last name</label>
                        <input class="form-control" type="text" name="last_name" value="{{ $profile->last_name }}" placeholder="last name" disabled>
                    </div>
                    <div class="form-group col-2">
                        <label for="age">Age</label>
                        <input class="form-control" type="number" name="age" value="{{ $profile->age }}" placeholder="00" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" value="{{ $profile->title }}" placeholder="title" disabled>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" rows="4" disabled>{{ $profile->description }}</textarea>
                </div>
            </div>
        </div>

        <hr class="my-4">

        <div class="form-group">
            <label for="phone">Phone</label>
            <input class="form-control" type="text" name="phone" value="{{ $profile->phone }}" placeholder="0000 00 00 00" disabled>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" value="{{ $profile->email }}" placeholder="example@example.com" disabled>
        </div>
        <div class="form-group">
            <label for="adres">Address</label>
            <input class="form-control" type="text" name="adres" value="{{ $profile->address }}" placeholder="adres" disabled>
        </div>

        <hr class="my-4">

        <div class="form-row row">
            <div class="form-group col-6">
                <label for="linkedin">LinkedIn</label>
                <input class="form-control" type="text" name="linkedin" value="{{ $profile->linkedin }}" placeholder="www.linkedin.com/in/name-lastname" disabled>
            </div>
            <div class="form-group col-6">
                <label for="github">Github</label>
                <input class="form-control" type="text" name="github" value="{{ $profile->github }}" placeholder="www.github.com/username" disabled>
            </div>
        </div>
    </form>
    <a class="btn btn-primary" href="{{ route('profile.edit', $profile->id) }}">EDIT PROFILE</a>
@endsection
