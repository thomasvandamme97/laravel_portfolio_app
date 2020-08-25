@extends('auth.panel.layouts.app')

@section('content')
    <h1>Create Softskill</h1>
    <form action="{{ route('softskills.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" placeholder="name" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" placeholder="short description" required>
        </div>
        <input class="btn btn-primary" type="submit" value="CREATE">
    </form>
@endsection
