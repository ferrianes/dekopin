@extends('layouts.admin')

@section('title', 'News')

@section('content')

<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Gallery Data</h6>
      <div>
        <a href="{{ route('admin.gallery.create') }}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Add Gallery
        </a>
      </div>
  </div>
  <div class="card-body">
      <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($items as $key => $item)
                <tr>
                  <td>{{ $key + 1 }}</td>
                  <td>
                    <img src="{{ Storage::url($item->path) }}" alt="image" style="width: 150px" class="img-thumbnail">
                  </td>
                  <td>
                    <form action="{{ route('admin.gallery.destroy', $item->id) }}" method="POST" class="d-inline delete">
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