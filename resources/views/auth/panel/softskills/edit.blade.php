@extends('auth.panel.layouts.app')

@section('content')
    <h1>Edit Softskill</h1>
    <form action="{{ route('softskills.update', $softskill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" value="{{ $softskill->name }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" value="{{ $softskill->description }}" required>
        </div>
        <input class="btn btn-primary" type="submit" value="UPDATE">
    </form>
@endsection
