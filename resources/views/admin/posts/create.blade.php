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
                    <form action="{{ route('admin.posts.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <select @class(['form-control', 'is-invalid' => $errors->has('categories')]) id="categories" multiple="multiple" name="categories[]"
                                    style="width: 100%;">
                                    @foreach (old('categories', []) as $categoryId)
                                        @if ($category = \App\Models\Category::find($categoryId))
                                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('categories')
                                    <span class="error invalid-feedback" id="title-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input @class(['form-control', 'is-invalid' => $errors->has('title')]) id="title" name="title" placeholder="Enter title"
                                    type="text" value="{{ old('title') }}">
                                @error('title')
                                    <span class="error invalid-feedback" id="title-error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input accept="image/*" class="custom-file-input" id="thumbnail"
                                            name="thumbnail_file" type="file">
                                        <label class="custom-file-label" for="thumbnail">Choose file</label>
                                    </div>
                                </div>
                                <input id="thumbnail-url" name="thumbnail" type="hidden" value="{{ old('thumbnail') }}">
                                <div class="mt-2">
                                    <img alt="Preview" id="thumbnail-preview" src="{{ old('thumbnail') ?? '#' }}"
                                        style="display: {{ old('thumbnail') ? 'block' : 'none' }}; width: 300px; height: 200px; border: 1px solid #ddd; padding: 5px; object-fit: contain;">
                                </div>
                                @error('thumbnail')
                                    <span class="error invalid-feedback" id="thumbnail-error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea @class(['form-control', 'is-invalid' => $errors->has('content')]) id="content" name="content" placeholder="Enter ..." rows="3">{{ old('content') }}</textarea>
                                @error('content')
                                    <span class="error invalid-feedback" id="content-error">{{ $message }}</span>
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
        $(function() {
            $(document).ready(function() {
                $('#categories').select2({
                    ajax: {
                        url: "{{ route('admin.categories.index') }}",
                        dataType: 'json',
                        delay: 500,
                        data: params => ({
                            search: params.term,
                            page: params.page || 1
                        }),
                        processResults: data => ({
                            results: data.items.map(item => ({
                                id: item.id,
                                text: item.name
                            })),
                            pagination: {
                                more: data.more
                            }
                        })
                    },
                    placeholder: "Choose categories",
                    minimumInputLength: 1,
                    allowClear: true
                });

                $('#content').summernote({
                    height: 350,
                    callbacks: {
                        onImageUpload: function(files) {
                            var formData = new FormData();
                            formData.append('upload', files[0]);

                            $.ajax({
                                url: "{{ route('admin.upload.file') }}",
                                method: "POST",
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    if (response.url) {
                                        $('#content').summernote('insertImage',
                                            response.url);
                                    }
                                },
                                error: function(error) {
                                    console.error("Upload failed:", error);
                                }
                            });
                        },
                        onImageLinkInsert: function(url) {
                            console.log("URL nhập vào:", url);
                        }
                    }
                })

                $('#thumbnail').change(function(event) {
                    let input = event.target;
                    let file = input.files[0];

                    if (!file) return;

                    let formData = new FormData();
                    formData.append('thumbnail', file);

                    $.ajax({
                        url: "{{ route('admin.upload.file-tmp') }}",
                        method: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if (response.url) {
                                $('#thumbnail-preview').attr('src', response.url)
                                    .show();
                                $('#thumbnail-url').val(response.url);
                            }
                        },
                        error: function(error) {
                            alert("Có lỗi xảy ra khi tải ảnh lên. Vui lòng thử lại!");
                            console.error("Upload failed:", error);
                        }
                    });
                });
            });
        })
    </script>
@endpush
