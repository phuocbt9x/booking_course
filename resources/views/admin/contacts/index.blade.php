@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <a class="btn btn-block btn-primary btn-sm" href="{{ route('admin.contacts.create') }}"
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
                                    <th>Email</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                    <th>Action(s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($contacts->isNotEmpty())
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td>{{ @$contact->id }}</td>
                                            <td>{{ @$contact->name }}</td>
                                            <td>{{ @$contact->email }}</td>
                                            <td>{{ @$contact->content }}</td>
                                            <td>{!! @$contact->activated !!}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn btn-info"
                                                        href="{{ route('admin.contacts.edit', $contact) }}">Edit</a>
                                                    <form action="{{ route('admin.contacts.destroy', $contact) }}"
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
                    {{ $contacts->onEachSide(5)->links() }}
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
@endsection
