@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <a class="btn btn-block btn-primary btn-sm" href="{{ route('admin.categories.create') }}"
                                type="button">Add new</a>
                        </div>
                        <form action="{{ url()->current() }}" class="float-right" method="get">
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="max-width: 250px;">
                                    <input class="form-control float-right" name="key_search" placeholder="Search"
                                        type="text">

                                    <div class="input-group-append">
                                        <button class="btn btn-default" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 500px;">
                        <table class="table-head-fixed table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($categories->isNotEmpty())
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>{{ @$category->id }}</td>
                                            <td>{{ Str::limit(@$category->name, 100, '...') }}</td>
                                            <td>{{ Str::limit(@$category->slug, 100, '...') }}</td>
                                            <td>{!! @$category->activeStatusLabel !!}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-info"
                                                        href="{{ route('admin.categories.edit', $category) }}">Edit</a>
                                                    <form action="{{ route('admin.categories.destroy', $category) }}"
                                                        class="flex" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" style="border-radius: 0"
                                                            type="submit">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="6">NOT FOUND DATA</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    {{ $categories->onEachSide(5)->links() }}
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
