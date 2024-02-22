@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto my-5 bg-light p-5 ">
                <h2>Titolo: {{ $project->title }}</h2>
                <p>Descrizione: {{ $project->description }}</p>
                <p>Link: {{ $project->link }}</p>
                <div class="">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-sm btn-outline-danger">Torna
                        all'elenco completo</a>
                </div>
            </div>
        </div>
    </div>
@endsection
