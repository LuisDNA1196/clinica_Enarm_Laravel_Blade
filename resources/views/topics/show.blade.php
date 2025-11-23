@extends('layouts.app')

@section('content')
    <div class="mb-3">
        <a href="{{ route('topics.index') }}" class="btn btn-link px-0">
            <i class="bi bi-arrow-left"></i> Volver a temas
        </a>
    </div>

    <div class="card card-soft mb-4">
        <div class="card-body">
            <h1 class="h4 mb-2">{{ $topic->name }}</h1>
            @if($topic->description)
                <p class="text-muted mb-0">{{ $topic->description }}</p>
            @endif
        </div>
    </div>

    <h2 class="h5 mb-3">Subtemas</h2>

    @if($topic->subtopics->isEmpty())
        <div class="alert alert-info">
            Aún no hay subtemas registrados para este tema.
        </div>
    @else
        <div class="row g-3">
            @foreach($topic->subtopics as $subtopic)
                <div class="col-md-6 col-lg-4">
                    <div class="card card-soft-outline h-100">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $subtopic->title }}</h5>
                            @if($subtopic->summary)
                                <p class="card-text text-muted">
                                    {{ \Illuminate\Support\Str::limit($subtopic->summary, 120) }}
                                </p>
                            @endif
                            <a href="{{ route('subtopics.show', $subtopic) }}"
                               class="btn btn-sm btn-primary mt-auto">
                                Ver subtema
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection
