@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped border border-2 my-3 shadow rounded">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Titolo</th>
                            <th>Descrizione</th>
                            <th>Link</th>
                            <th>Slug</th>
                            <th>Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr class="align-content-center">
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ Str::limit($project->description, 100) }}</td>
                                <td>{{ $project->link }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>
                                    <div class="d-flex">

                                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"
                                            class="btn btn-sm btn-outline-secondary">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </a>
                                        <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"
                                            class="btn btn-sm btn-outline-warning ms-1">
                                            <i class="fa-solid fa-edit"></i>
                                        </a>
                                        <a href="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                            class="btn btn-sm btn-outline-danger ms-1">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
