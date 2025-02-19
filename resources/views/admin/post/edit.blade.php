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
                    <form action="{{ route('admin.posts.update', $post) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input @class(['form-control', 'is-invalid' => $errors->has('name')]) id="name" name="name" placeholder="Enter name"
                                    type="text" value="{{ old('name', $category->name) }}">
                                @error('name')
                                    <span class="error invalid-feedback" id="name-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input {{ old('activated', $category->activated) ? 'checked' : '' }}
                                        class="custom-control-input" id="activated" name="activated" type="checkbox"
                                        value="1">
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
