@extends('auth.panel.layouts.app')

@section('content')
    <h1>Create Project</h1>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" placeholder="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" placeholder="description">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input class="form-control" type="text" name="link" placeholder="www.example.com">
        </div>
        <div class="form-group">
            <label for="file">Upload Image</label>
            <input class="form-control-file" type="file" name="file">
        </div>
        <input class="btn btn-primary" type="submit" value="CREATE PROJECT">
    </form>
@endsection
