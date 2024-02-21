@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped border border-2 my-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Link</th>
                            <th>Slug</th>
                            <th>Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ Str::limit($project->description, 50) }}</td>
                                <td>{{ $project->link }}</td>
                                <td>{{ $project->slug }}</td>
                                <td><a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"
                                        class="btn btn-sm btn-success">Info</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
