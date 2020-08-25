@extends('auth.panel.layouts.app')

@section('content')
    <h1>Edit Skill</h1>
    <form action="{{ route('skills.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ $skill->name }}" required>
        </div>
        <div class="form-group">
            <label for="percentage">Percentage(0-100)</label>
            <input class="form-control-range" type="range" name="percentage" min="0" max="100" step="5" value="{{ $skill->percentage }}" required>
        </div>
        <input class="btn btn-primary" type="submit" value="UPDATE">
    </form>
@endsection
