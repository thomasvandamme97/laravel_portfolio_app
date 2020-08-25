@extends('auth.panel.layouts.app')

@section('content')
    <h1>Create Employment</h1>
    <form action="{{ route('employment.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" placeholder="title" required>
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input class="form-control" type="text" name="company" placeholder="company" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" placeholder="description" required>
        </div>
        <div class="form-group">
            <label for="start_year">Start</label>
            <input class="form-control" type="number" name="start_year" placeholder="year" required>
        </div>
        <div class="form-group">
            <label for="end_year">End</label>
            <input class="form-control" type="number" name="end_year" placeholder="year" required>
        </div>
        <input class="btn btn-primary" type="submit" value="CREATE">
    </form>
@endsection
