@extends('auth.panel.layouts.app')

@section('content')
    <h1>Create Skill</h1>
    <form action="{{ route('skills.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" placeholder="name" required>
        </div>
        <div class="form-group">
            <label for="percentage">Percentage(0-100)</label>
            <input class="form-control-range" type="range" name="percentage" min="0" max="100" step="5" required>
        </div>
        <input class="btn btn-primary" type="submit" value="CREATE">
    </form>
@endsection
