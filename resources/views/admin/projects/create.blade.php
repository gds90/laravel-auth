@extends ('layouts.app')

@section('content')
    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="form-group my-2">
            <label for="title" class="control-label m-1 text-danger ">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                placeholder="Titolo del progetto" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger m-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group my-2">
            <label for="description" class="control-label m-1 text-danger ">Descrizione</label>
            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                placeholder="Descrizione del progetto" cols="100" rows="10" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger m-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group my-2">
            <label for="link" class="control-label m-1 text-danger">Link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" id="link"
                placeholder="Link del progetto" value="{{ old('title') }}" required>
            @error('link')
                <div class="text-danger m-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group my-2">
            <button type="submit" class="btn btn-sm btn-success m-1">Salva</button>
        </div>
    </form>
@endsection
