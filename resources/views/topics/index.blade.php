@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3 mb-0">Temas ENARM</h1>
        <span class="text-muted small">
            Selecciona una especialidad para ver sus subtemas.
        </span>
    </div>

    <div class="row g-3">
        @foreach($topics as $topic)
            <div class="col-md-6 col-lg-4">
                <div class="card card-soft h-100">
                    <div class="card-body d-flex flex-column">
                        <span class="badge badge-topic mb-2">
                            {{ strtoupper($topic->name) }}
                        </span>
                        <p class="card-text flex-grow-1">
                            {{ \Illuminate\Support\Str::limit($topic->description, 120) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <small class="text-muted">
                                {{ $topic->subtopics_count }} subtemas
                            </small>
                            <a href="{{ route('topics.show', $topic) }}" class="btn btn-sm btn-primary">
                                Ver detalle
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
