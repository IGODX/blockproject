@extends('layout.app')
@section('content')
    <form action="{{ route('block.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <div class="form-group">
                <label class="form-label">Topic title: </label>
                <select name="topicid" class="form-control" class="@error('topicid') is-invalid
            @enderror">
                    @foreach ($topics as $topic)
                        <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                    @endforeach
                </select>
                @error('topicid')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <a href="{{ route('topic.create') }}" class="mt-3 btn btn-outline-primary btn-sm">Add new topic</a>
            </div>
        </div>
        <div class="mb-3">
            <label for="blockTitle" class="form-label">Block title:</label>
            <input type="text" name="title" id="blockTitle" class="form-control"
                class="@error('title') is-invalid
            @enderror">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="blockText">Block text:</label>
            <textarea class="form-control" name="content" id="blockText" rows="3"
                class="@error('content') is-invalid
            @enderror"></textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <div><label for="uploadedFile">Upload file:</label></div>
            <input type="file" name="imagepath" class="form-control-file" id="uploadedFile"
                class="@error('imagepath') is-invalid
            @enderror">
            @error('imagepath')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <input type="submit" class="btn btn-outline-primary" value="Create">
    </form>
@endsection
