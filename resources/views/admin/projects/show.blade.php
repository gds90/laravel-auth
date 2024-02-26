@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto my-5 bg-light p-5 ">
                <div class="text-center mb-3">
                    @if ($project->cover_image !== null)
                        <img src="{{ asset('storage') . '/' . $project->cover_image }}" alt="{{ $project->title }}"
                            width="75%">
                    @else
                        <img src="{{ asset('/img/test-img.jpg') }}" alt="{{ $project->title }}">
                    @endif
                </div>
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
