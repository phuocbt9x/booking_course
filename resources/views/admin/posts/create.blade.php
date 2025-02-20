@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.posts.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Categories</label>
                                <select class="form-control" id="categories" multiple="">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                                @error('categories')
                                    <span class="error invalid-feedback" id="categories-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input @class(['form-control', 'is-invalid' => $errors->has('name')]) id="name" name="name" placeholder="Enter name"
                                    type="text" value="{{ old('name') }}">
                                @error('name')
                                    <span class="error invalid-feedback" id="name-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input @class(['form-control', 'is-invalid' => $errors->has('name')]) id="name" name="name" placeholder="Enter name"
                                    type="text" value="{{ old('name') }}">
                                @error('name')
                                    <span class="error invalid-feedback" id="name-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input @class(['form-control', 'is-invalid' => $errors->has('name')]) id="name" name="name" placeholder="Enter name"
                                    type="text" value="{{ old('name') }}">
                                @error('name')
                                    <span class="error invalid-feedback" id="name-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input {{ old('activated', false) ? 'checked' : '' }} class="custom-control-input"
                                        id="activated" name="activated" type="checkbox" value="1">
                                    <label class="custom-control-label" for="activated">Activate</label>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button class="btn btn-primary float-right" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@push('script')
    <script>
        $('#categories').select2({
            ajax: {
                url: "{{ route('admin.categories.index') }}",
                dataType: 'json',
                delay: 500,
                data: function(params) {
                    return {
                        search: params.term,
                        page: params.page || 1
                    };
                },
                processResults: function(data) {
                    return {
                        results: data.items.map(item => ({
                            id: item.id,
                            text: item.name
                        })),
                        pagination: {
                            more: data.more
                        }
                    };
                }
            },
            placeholder: "Choose categories",
            minimumInputLength: 1,
            allowClear: true
        });
    </script>
@endpush
