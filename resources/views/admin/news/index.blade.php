@extends('layouts.admin')

@section('title', 'News')

@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">News Data</h6>
      <div>
        <a href="{{ route('admin.news.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add News
        </a>
      </div>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Source</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($items as $key => $item)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>{{ $item->title }}</td>
                  <td>
                    <img src="{{ Storage::url($item->image) }}" alt="image" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td>{{ $item->source }}</td>
                  <td>
                    <a href="{{ route('admin.news.edit', $item->id) }}" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                    </a>
                    <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST" class="d-inline delete">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
      </div>
  </div>
</div>
@endsection