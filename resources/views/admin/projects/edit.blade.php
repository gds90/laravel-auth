@extends ('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-uppercase text-dark-emphasis ">Modifica del progetto "{{ $project->title }}":</h2>
                <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-2">
                        <label for="title" class="control-label m-1 text-danger ">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            id="title" placeholder="Titolo del progetto" value="{{ old('title') ?? $project->title }}"
                            required>
                        @error('title')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="description" class="control-label m-1 text-danger ">Descrizione</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                            placeholder="Descrizione del progetto" cols="100" rows="10" required>{{ old('description') ?? $project->description }}</textarea>
                        @error('description')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <label for="link" class="control-label m-1 text-danger">Link</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link"
                            id="link" placeholder="Link del progetto" value="{{ old('title') ?? $project->link }} "
                            required>
                        @error('link')
                            <div class="text-danger m-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-2">
                        <button type="submit" class="btn btn-sm btn-success m-1">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
