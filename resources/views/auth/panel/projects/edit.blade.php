@extends('auth.panel.layouts.app')

@section('content')
    <h1>Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row form-group">
            <img class="col-md-4" src="/storage/projects/{{ $project->image }}" alt="">
        </div>
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" value="{{ $project->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" type="text" name="description" value="{{ $project->description }}">
        </div>
        <div class="form-group">
            <label for="link">Link</label>
            <input class="form-control" type="text" name="link" value="{{ $project->link }}">
        </div>
        <div class="form-group">
            <label for="file">Upload Image</label>
            <input class="form-control-file" type="file" name="file">
        </div>
        <input class="btn btn-primary" type="submit" value="UPDATE PROJECT">
    </form>
@endsection
