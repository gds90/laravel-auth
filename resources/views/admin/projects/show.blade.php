@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 m-auto my-5">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                <p>Link: {{ $project->link }}</p>
            </div>
        </div>
    </div>
@endsection
