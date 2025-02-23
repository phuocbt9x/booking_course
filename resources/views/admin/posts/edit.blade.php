@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Edit Post</h3>
                    </div>
                    <form action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <select class="form-control" id="categories" multiple="multiple" name="categories[]"
                                    style="width: 100%;">
                                    @foreach ($post->categories as $category)
                                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" id="title" name="title" type="text"
                                    value="{{ old('title', $post->title) }}">
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
                                    <img alt="Preview" id="thumbnail-preview"
                                        src="{{ old('thumbnail', $post->thumbnail) ?? '#' }}"
                                        style="display: {{ old('thumbnail', $post->thumbnail) ? 'block' : 'none' }}; width: 300px; height: 200px; border: 1px solid #ddd; padding: 5px; object-fit: contain;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="3">{!! old('content', $post->content) !!}</textarea>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-switch">
                                    <input {{ old('activated', $post->activated) ? 'checked' : '' }}
                                        class="custom-control-input" id="activated" name="activated" type="checkbox"
                                        value="1">
                                    <label class="custom-control-label" for="activated">Activate</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning float-right" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(function() {
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
                    }
                }
            })

            $('#thumbnail').change(function(event) {
                let file = event.target.files[0];
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
                            $('#thumbnail-preview').attr('src', response.url).show();
                            $('#thumbnail-url').val(response.url);
                            $('#thumbnail').next('.custom-file-label').html(file.name);
                        }
                    },
                    error: function(error) {
                        alert("Có lỗi xảy ra khi tải ảnh lên. Vui lòng thử lại!");
                        console.error("Upload failed:", error);
                    }
                });
            });
        });
    </script>
@endpush
