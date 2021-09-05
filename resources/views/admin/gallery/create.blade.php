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
        <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="customFile">Image</label>
              <div class="custom-file">
                  <input type="file" name="image" class="custom-file-input" id="customFile">
                  <label class="custom-file-label" for="customFile">Choose Image</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                <i class="fas fa-fw fa-save"></i> Simpan
            </button>
        </form>
    </div>
</div>
@endsection

@push('addon-script')
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@endpush