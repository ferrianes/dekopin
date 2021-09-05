@extends('layouts.admin')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul class="mb-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="card shadow">
    <div class="card-body">
        <form action="{{ route('admin.news.update', $item->id) }}" method="POST" enctype="multipart/form-data">
          @method('PUT')
            @csrf
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $item->title }}" id="title">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" rows="3" name="description">{{ $item->description}}</textarea>
            </div>
            <div class="form-group">
              <label for="customFile">Image</label>
              <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose Image</label>
              </div>
            </div>
            <div class="form-group">
              <label for="source">Source</label>
              <input type="text" class="form-control" name="source" placeholder="Source" value="{{ $item->source }}" id="source">
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-fw fa-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection