@extends('auth.panel.layouts.app')

@section('content')
    <h1>Update Education</h1>
    <form action="{{ route('education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ $education->name }}" placeholder="name" required>
        </div>
        <div class="form-group">
            <label for="school">School</label>
            <input class="form-control" type="text" name="school" value="{{ $education->school }}" placeholder="school" required>
        </div>
        <div class="form-group">
            <label for="diploma">Diploma</label>
            <input class="form-control" type="text" name="diploma" value="{{ $education->diploma }}" placeholder="diploma" required>
        </div>
        <div class="form-group">
            <label for="start_year">Start</label>
            <input class="form-control" type="number" name="start_year" value="{{ $education->start_year }}" placeholder="year" required>
        </div>
        <div class="form-group">
            <label for="end_year">End</label>
            <input class="form-control" type="number" name="end_year" value="{{ $education->end_year }}" placeholder="year" required>
        </div>
        <input class="btn btn-primary" type="submit" value="UPDATE">
    </form>
@endsection
